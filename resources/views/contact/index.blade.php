@extends('layouts.dashboard',['title' => 'Contacts'])
@section('dashboard')
<div class="container">
    <div class="row">
        @foreach ($contacts as $contact)
        <div class="col-md-4">
            <div class="card card-round h-100" id="contacts">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                        <div class="card-title">{{$contact->name}}</div>
                        <div class="card-tools">
                            <button type="button" class="btn btn-icon btn-clean me-0" data-bs-toggle="modal" data-bs-target="#delete{{$contact->id}}" data-contact-id="{{$contact->id}}">
                                <i class="fas fa-trash"></i>
                            </button>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="delete{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteLabel">Delete Contact</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this message?
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="/contact/{{$contact->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>
                        <b>Email:</b> {{$contact->email}}<br>
                        <b>Phone:</b>{{$contact->phone}}
                    </p>
                    <p>{{$contact->message}}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection