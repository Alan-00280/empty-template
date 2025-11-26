@extends('template')

{{-- @section('breadcrumb', json_encode([
    ["href" => "#", "text" => "Bread 1"],
    ["href" => "#", "text" => "Bread 2"],
    ["text" => "Blank Page"]
])) --}}

@section('breadcrumb')
    <x-breadcrumb :items='[["href" => "#", "text" => "Bread 1"],["href" => "#", "text" => "Bread 2"],["text" => "Blank Page"]]' />
@endsection

@section('page-header', 'Blank Page')

@section('content')
    
    <x-cardHalf heading="Card Setengah" description="Ini Deskripsinya">
        {{-- Content card di sini ya --}}
        <h2>Content nya di sini pokonya</h2>
    </x-cardHalf>
    <x-cardHalf heading="Card Setengah" description="Ini Deskripsinya">
        {{-- Content card di sini ya --}}
        <h2>Hello World</h2>
    </x-cardHalf>

    <x-cardFull heading="Card Full" description="Tambahin Deskripsi nya di sini" >
        {{-- Content nya di sini yaw --}}
        <div>
            <h1>Lorem Ipsum</h1>
            <p>Irure incididunt magna adipisicing in dolor ut. Eiusmod officia cupidatat do adipisicing anim do nostrud reprehenderit elit laborum tempor. Aliqua labore qui est dolore. In ut aute reprehenderit velit nulla nisi veniam aliquip veniam laboris irure aliquip veniam. Dolore est elit irure reprehenderit do officia eiusmod anim enim Lorem eu et. Do minim minim duis ex quis.</p>
        </div>
    </x-cardFull>
    
@endsection
