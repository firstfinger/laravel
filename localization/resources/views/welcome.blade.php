
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>


                        @endforeach
                    </ul>
                    <ul>
                            <h1>
                                   @lang('sentence.hobby')
                            <h1>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
