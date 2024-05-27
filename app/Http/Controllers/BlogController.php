<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function showBlog()
    {
        $jumlahArtikelPerHalaman = 10;
        $articles = Articles::paginate($jumlahArtikelPerHalaman);
        return view('blog', compact('articles'));
    }

    public function show($slug)
    {
        $article = Articles::where('slug', $slug)->firstOrFail();
        $recent_blogs = Articles::latest()->take(5)->get();
        $tags = Tags::all();
        return view('blog-details', compact('article', 'recent_blogs', 'tags'));
    }
 
    //articles
    public function articles() 
    {
        $articles = Articles::paginate(10);
        return view('admin.blog.articles', compact('articles'))->with('i', (request()->input('page', 1) - 1) * 10)->with('articles', $articles);
    }

    //create article
    public function articleCreate()
    {
        $categories = Categories::all();
        $tags = Tags::all();
        return view('admin.blog.articlesCreate', compact('categories', 'tags'));
    }

    public function articleStore(Request $request)
    {
        $validatedData = $this->validateArticle($request);

        $validatedData['slug'] = Str::slug($request->title);
        $validatedData['user_id'] = auth()->id();
        $validatedData['is_published'] = $request->has('status') && $request->status == 'publish';

        $this->handleArticleImage($request, $validatedData);

        Articles::create($validatedData);

        return redirect()->route('admin.blog.articles')->with('success', 'Artikel berhasil ditambahkan');
    }

    private function validateArticle(Request $request)
    {
        return $request->validate([
            'title' => 'required',
            'body' => 'required|string',
            'image' => 'image|file|max:10240',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
            'status' => 'in:draft,publish',
        ]);
    }

    private function handleArticleImage(Request $request, &$validatedData)
    {
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('public/articles');
        }
    }

    //articleDelete
    public function articleDelete($id)
    {
        $article = Articles::findOrFail($id);

        try {
            // Hapus foto aslinya
            $image = $article->image;
            if ($image) {
                Storage::delete($image);
            }
            $article->delete();
            return redirect()->route('admin.blog.articles')->with('success', 'Artikel berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog.articles')->with('error', 'Kesalahan saat menghapus artikel: ' . $e->getMessage());
        }
    }


    //articleEdit
    public function articleEdit($id)
    {
        $article = Articles::findOrFail($id);
        $categories = Categories::all();
        $tags = Tags::all();

        return view('admin.blog.article-edit', compact('article', 'categories', 'tags'));
    }

    //articleUpdate
    public function articleUpdate(Request $request, $id)
    {
        $validatedData = $this->validateArticle($request);
        $article = Articles::findOrFail($id);

        // Hapus gambar lama jika ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            $oldImage = $article->image;
            if ($oldImage) {
                Storage::delete($oldImage);
            }
        }

        // Update status artikel berdasarkan input
        $validatedData['is_published'] = $request->input('status', false) === 'publish';

        $article->update($validatedData);
        $this->handleArticleImage($request, $validatedData);

        return redirect()->route('admin.blog.articles')->with('success', 'Artikel berhasil diubah');
    }


    //categories
    public function categories()
    {
        $categories = Categories::paginate(10);
        return view('admin.blog.categories', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 10)->with('categories', $categories);
    }

    //categoryCreate
    public function categoryCreate()
    {
        return view('admin.blog.categoriesCreate');
    }

    //categoryStore
    public function categoryStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $category = Categories::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name),
            'user_id' => auth()->user()->id,
            'is_published' => false,
        ]);
        return redirect()->route('admin.blog.categories')->with('success', 'Category added successfully');
    }

    //categoryDelete
    public function categoryDelete($id)
    {
        try {
            $category = Categories::findOrFail($id);
            $category->delete();
            return redirect()->route('admin.blog.categories')->with('success', 'Kategori berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog.categories')->with('error', 'Kesalahan saat menghapus kategori');
        }
    }

    //category edit
    public function categoryEdit($id)
    {
        $category = Categories::findOrFail($id);
        return view('admin.blog.categoriesEdit', compact('category'));
    }

    //category update
    public function categoryUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $category = Categories::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name),
            'user_id' => auth()->user()->id,    
        ]);
        return redirect()->route('admin.blog.categories')->with('success', 'Category updated successfully');
    }

    //tags
    public function tags()
    {
        $tags = Tags::paginate(10);
        return view('admin.blog.tags', compact('tags'))->with('i', (request()->input('page', 1) - 1) * 10)->with('tags', $tags);
    }

    //tags created
    public function tagCreate()
    {
        $categories = Categories::all();
        return view('admin.blog.tagsCreate', compact('categories'));
    }

    //tag store
    public function tagStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $tag = new Tags([
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['name']),
            'user_id' => auth()->id(),
            'category_id' => $request->category_id, // Pastikan form memiliki input untuk category_id
            'is_published' => $request->has('is_published')
        ]);

        try {
            $tag->save();
            return redirect()->route('admin.blog.tags')->with('success', 'Tag berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog.tags')->with('error', 'Kesalahan saat menyimpan tag');
        }
    }

    //tag edit
    public function tagEdit($id)
    {
        $tag = Tags::with(['user', 'category'])->findOrFail($id);
        $categories = Categories::all();
        return view('admin.blog.tagEdit', compact('tag', 'categories'));
    }

    //tag update
    public function tagUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            // 'slug' => 'required|unique:tags,slug,' . $id,
            'category_id' => 'required',
            'is_published' => 'sometimes|boolean'
        ]);

        $tag = Tags::findOrFail($id);
        $tag->name = $validatedData['name'];
        $tag->slug = Str::slug($validatedData['name']);
        $tag->category_id = $validatedData['category_id'];
        $tag->is_published = $request->input('is_published', $tag->is_published);

        try {
            $tag->save();
            return redirect()->route('admin.blog.tags')->with('success', 'Tag berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog.tags')->with('error', 'Kesalahan saat memperbarui tag: ' . $e->getMessage());
        }
    }

    //tag delete
    public function tagDelete($id)
    {
        $tag = Tags::findOrFail($id);
        try {
            $tag->delete();
            return redirect()->route('admin.blog.tags')->with('success', 'Tag berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.blog.tags')->with('error', 'Kesalahan saat menghapus tag: ' . $e->getMessage());
        }
    }

}
