@extends('admin.app')

@section('content')
    <div class="pagetitle">
        <h1>Contact Us</h1>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="post"
                                    id="deleteForm-{{ $contact->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirmDelete({{ $contact->id }})">
                                        Delete
                                    </button>
                                </form>
                            </td>

                            <script>
                                function confirmDelete(id) {
                                    Swal.fire({
                                        title: 'Are you sure?',
                                        text: "You won't be able to revert this!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Yes, delete it!'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            document.getElementById('deleteForm-' + id).submit();
                                        }
                                    })
                                    return false;
                                }
                            </script>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
