<section class="contact_form_area">
    <div class="container">
        <div class="welcome_title">
            <h3>Register A Free Account</h3>
            <img src="img/w-title-b.png" alt="">
        </div>
        <div class="row">
             
            <form

                    action="{{route('save')}}"
                    method="post"  class="form_inner"

            >
                
                
      
                
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input name="name" required type="text" class="form-control"  placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="tel" minlength="10" maxlength="13" name="mobile" class="form-control"  placeholder="Mobile Number">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group col-md-12">
                        <input  required type="text" name="city" class="form-control" placeholder="City">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn form-control login_btn">Register</button>
                              <img src="100.png" width="80px" style="
                             display: block;
    margin-left: auto;
    margin-right: auto;
    width: 25%;
                            
                            "></img>
                </div>
                
            </form>

        </div>
    </div>
</section>