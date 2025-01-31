@extends('layouts.app')

<body>
    <div class="welcome">

        <!-- <video autoplay loop muted playsinline class="welcome-bg-video">
            <source src="{{ url('assets/images/punchVideo.mp4') }}" type="video/mp4">
            </video> -->

        <div class="welcome-bg">
            <h1>energise, hydrate, zero sugar</h1>
            <a href="{{ url('/store') }}">shop drinks</a>
        </div>

        <div class="welcome-body">
            <div class="content">
                <h2>what is it?</h2>
                <p>It's a drink that's made with real fruit juice, natural caffeine and electrolytes. It's got no
                    sugar,
                    no
                    artificial sweeteners and no artificial colours. It's got a great taste and it's got a great
                    name.
                </p>
            </div>
        </div>
    </div>
</body>
