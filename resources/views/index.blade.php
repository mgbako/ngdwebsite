@extends('layouts.master')

@section('content')

      <h2>We are <a href="#status">not fully set</a> as you can see but we'd like for you to sign up below to be notified when we launch. We'll even throw in a <a href="#freebie">freebie</a></h2>
    </div><!-- end container -->
  </header>
  
  

  <!-- Form -->
  <section>
    <div class="form-container">
      <div class="page-section" id="signup">

        {!! Form::open(['url'=>'welcome']) !!}
          <p>
            {!! Form::text('name', null, ['id'=>'name', 'placeholder'=>'name']) !!}
          </p>
          <p>
            {!! Form::email('email', null, ['id'=>'email','placeholder'=>'Email Address']) !!}
          </p>
          <p class="form-note">
            <em> We won't send you spam emails, scout's honour</em>
          </p>
          <p>
            {!! Form::submit('Get Notified') !!}
          </p>
        {!! Form::close() !!}
      </div><!-- end of page-section -->
    </div><!-- end of form-container -->
  </section>


  <!-- Status -->
  <section>
    <div class="container page-section" id="status">
      <h2>- Status Report -</h2>

      <div id="progress-bar" data-progress-value="10" data-progress-description="just setting up our app structure"></div> <!-- end progress-bar -->  
    </div><!-- end of container --> 
  </section>
  

  <!--FREEBIE -->
  <section>
    <div class="container page-section freebie-container" id="freebie">
      <hgroup>
        <h2>Did i hear... Freebie? </h2>
        <h3>Yes you did. we'll give a free landing page template to everyone who signs up in the section <a href="#signup">above</a></h3>
      </hgroup>
      <figure>
        <!-- <img src="images/freebie.png" alt="Freebie" /> -->
      </figure>
    </div><!-- end container -->
  </section>




  <!-- CONTACT -->
  <section>
    <div class="container page-section">
      <h2>You can get in touch by sending us an <a href="mailto:profdavis.dt@gmail.com">email</a> or via social networks.</h2>
      <ul class="social"> 
        <li><a class="hi" href=""><i class="fa fa-twitter"></i></a></li>
        <li><a class="hi" href="https://www.facebook.com/newgenesisdesigns?ref=hl"><i class="fa fa-facebook"></i></a></li>
      </ul>
    </div><!-- end container -->
  </section>

@stop

