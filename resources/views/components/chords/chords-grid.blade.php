@props(['chords'])

<section class="w-full max-w-5xl flex flex-wrap">

    @foreach ($chords as $chord)
        
        <x-chords.chord-item :id="$chord->id" :name="$chord->name" :description="$chord->description"/>

    @endforeach

</section>