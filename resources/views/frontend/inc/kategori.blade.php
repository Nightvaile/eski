@if(count($categories) > 0 && !empty($categories))

    @foreach($categories as $altKategori)
        @if($altKategori->parent_id == $kategori->id)
            <ul>
            <li>

                @php
                    if (empty($tut))
                        $tut=$kategori->slug
                @endphp
                <a href="{{ route('kategori_goster', ['kategori' =>$tut , 'altKategori'=>$altKategori->slug]) }}">{{$altKategori->name}}</a>
                {{--@php($tut=$altKategori->slug)--}}{{--Bu Satır 2den daha fazla alt kategoriye sahip kategori ağacı için kontrolleren geçirilerek kullanılmalı--}}
                @include('frontend.inc.kategori', ['altKategoriler' => $altKategori->subcategories, 'kategori' => $altKategori])
            </li>
            </ul>
        @endif
    @endforeach

@endif

