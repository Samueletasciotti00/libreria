{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>HOME</h1>
    <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia praesentium tenetur laboriosam, cumque minus aliquam sed placeat voluptates voluptate eos dolore, iure quaerat aut ex mollitia, accusantium numquam pariatur? Reiciendis!
        Tempora exercitationem commodi repudiandae natus, deleniti recusandae. Libero magnam culpa non officia nihil consectetur minus harum possimus neque mollitia vitae, magni a ut sint autem, odio corporis, excepturi omnis at!
        Laboriosam corporis aspernatur adipisci magni dicta fuga nisi atque hic est officia! Molestiae, reiciendis debitis voluptatem eveniet voluptas suscipit officia at cumque omnis in earum ullam quia! Doloribus, neque dolorum?
        Necessitatibus quidem quisquam est quo fugiat impedit, soluta blanditiis animi nam veritatis! Provident qui nobis, amet beatae officia quod iste velit nisi aliquam laudantium temporibus, eum deserunt soluta nam magnam.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
