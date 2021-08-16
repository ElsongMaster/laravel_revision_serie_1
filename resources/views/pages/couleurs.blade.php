@extends('template.index')




@section('content')

<div class="container">
    <h1>Beinvenue sur ma page couleurs</h1>

    <p class="{{in_array($color,$listColor)?$objColor->{$color}:''}}">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio unde delectus nobis minus asperiores quidem. Commodi laudantium eum blanditiis libero saepe! Vel, eius? Velit officiis rem dolores placeat quis?
    Cum accusamus dolore alias facere quisquam rerum, dolores ad eius delectus perspiciatis! Assumenda quas adipisci esse ratione modi natus. Molestiae, eius magnam! Magnam, eius! Sapiente placeat alias itaque vitae esse.
    Voluptate delectus quis, iste impedit doloribus atque error. Sunt laboriosam distinctio ipsa provident sint tempora, eum inventore iure doloremque sit totam repudiandae nam nobis ad fugiat aliquam sed reprehenderit minus.
    Quibusdam animi laboriosam sint. Porro eius fugiat soluta est provident. Eos officia commodi deserunt temporibus. Doloremque fuga nemo excepturi tempora ex, saepe magni, aliquam cumque quisquam iste illum? Recusandae, sapiente?
    Est quis deleniti quaerat veniam inventore ducimus magni nisi id perferendis debitis voluptatem sit aut nihil, nobis odit laborum optio vero quasi? Officiis facilis cum praesentium sit assumenda nulla veritatis.</p>
</div>

@endsection