<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Email</title>
  
</head>
<body>
           
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Contact Us</h4>
                <form action="{{ route('send.email') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name"  value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email"  value="{{ old('email') }}">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter your subject"  value="{{ old('subject') }}">
                        @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <textarea name="message" class="form-control"cols="4" rows="4">{{ old('message') }} </textarea>
                        @error('message')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror 
                    </div>

                    <button class="btn btn-primary" >Send</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>