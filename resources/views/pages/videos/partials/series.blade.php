<section id="series" class="section">
    <div class="wrap">
        <h2 class="title line-after mb-16">Available series</h2>
    </div>
    <div class="wrap-6 | items-start markup-lists">
        @foreach($allSeries as $series)
            <div class="sm:spanx-3">
                <a href="{{ $series->url }}" class="illustration">
                    {{ image('portfolio/flare.jpg') }}
                </a>
            
                <div class="mt-8 line-l">
                    <h2 class="title-sm">
                        <a href="{{ $series->url }}">{{ $series->title }}</a>
                        <div class="title-subtext text-grey">
                            {{ $series->videos()->count() }} {{  \Illuminate\Support\Str::plural('video', $series->videos()->count()) }}
                        </div>
                    </h2>
                    <p class="mt-4">
                        {{ $series->description }}
                    </p>
                    <p class="mt-4">
                        <a class="link-underline link-blue" href="{{ $series->url }}">Watch this series</a>
                    </p>
                    
                    <ol class="mt-4 text-xs text-grey markup-list-compact">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                    </ol>
                </div>
            </div>
        @endforeach
    </div>
</section>