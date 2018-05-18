

    <h2 class="blog-post-title">Register</h2>

<form method="POST" action="{{'/register' }}">

    {{ csrf_field() }}
    
    <div class="form-group">
    <label for="first_name">First name</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
    </div>

    <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email"></textarea>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password"></textarea>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"></textarea>
    </div>


    <div class="form-group">
    <select class="form-control" id="country" name="country">
        @foreach($countries as $country)
        <option value="{{$country->name}}">{{$country->name}}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" id="company" name="company"></textarea>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

    @if (count($errors->all()) > 0)
        @foreach($errors->all() as $error)
        <div class="form-group">
        <div class="alert alert-danger">
        <li>{{ $error }}</li>
    </div>
</div>

        @endforeach
     @endif

