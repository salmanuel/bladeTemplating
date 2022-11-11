
@extends('base')


@section('content')

<div class="card shadow-sm mx-auto" style= "width: 700px">
    <div class="card-title"><strong>Welcome!</strong></div>
    <p>
        Hi! Welcome to my <strong><em> Website </em></strong>. <br>
        While you are here, please enjoy this cute picture of a puppy, <br>
        and also a <a href="{{ url('https://youtu.be/dQw4w9WgXcQ') }}"> <span style="color:blue;">video</span> </a> to pass time.
        <img src="https://www.rd.com/wp-content/uploads/2018/02/30_Adorable-Puppy-Pictures-that-Will-Make-You-Melt_124167640_YamabikaY.jpg?fit=700,467" class="img-thumbnail" style="width:700px;height:467px" alt="cute puppy">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
        Nesciunt excepturi, impedit fuga iste alias consequatur aut. <br>
        Laboriosam alias beatae, aliquam sequi officia qui vero earum quo, <br> 
        quisquam quos delectus mollitia. <br>
    </p>
</div>

<style>
    .card-title {
        text-align: center
    }

    p {
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-align: center
    }
</style>

@endsection


