@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!}
                </div>
            @endif
            </div>
        </div>
    </div>
</div>


<header class="header-section">
<div class="container">
         <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
               <img src="{{ asset('img/deftec-logo.png') }}" alt="DEFTEC Logo" class="img-fluid logo-image">
            </div>
            <div class="col-md-8 text-white text-left">
               <h1 class="display-4">IT-WORKSHOP</h1>
               <p>A user-friendly solution designed to streamline the reporting and tracking of computer issues. With easy ticket creation, document attachments, and efficient problem resolution, it simplifies IT-related tasks for users and ensures prompt assistance from DEFTEC technicians. Welcome to a more organized and efficient way of managing computer matters.</p>

            </div>
         </div>
      </div>
   </header>

<style>
   .header-section {
      background-color: transparent;
      padding: 40px 0;
      margin-bottom: 140px;
   }

   .logo-image {
      height: 40vh;
      
       /* Adjust the margin as needed */
   }

   .header-section h1 {
      font-weight: 700;
      color: #20a8d8;
   }

   .header-section p {
      max-width: 550px;
      
      color: #3A6391;
   }

   .btn {
      font-weight: 700;
      font-size: 12px;
      text-transform: uppercase;
      padding: 12px 28px;
      border-radius: 0;
   }

   .btn-brand {
      background-color: #3A6391;
      color: #FFFFFF;
   }

   .btn-brand:hover {
      background-color: #FFFFFF;
      color: #3A6391;
   }
</style>


<footer>
   <div class="container">
      <p>Created with ❤️ by DEFTEC Attachees 2023</p>
   </div>
</footer>
@endsection


@section('scripts')
<script>
    var uploadedAttachmentsMap = {}
Dropzone.options.attachmentsDropzone = {
    url: '{{ route('tickets.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="attachments[]" value="' + response.name + '">')
      uploadedAttachmentsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAttachmentsMap[file.name]
      }
      $('form').find('input[name="attachments[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($ticket) && $ticket->attachments)
          var files =
            {!! json_encode($ticket->attachments) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="attachments[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@stop