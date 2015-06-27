@extends('blog.template')

@section('title', 'Exploring the new Android Design Support Library')

@section('content')
    <div class="blog-header">
        <img src="{{ asset('blog/images/1.jpg') }}" class="blog-image">
        <h3 class="blog-title">Exploring the new Android Design Support Library</h3>
        <p class="lead blog-description">This new library introduces several new components previously not available out-of-the-box. Here we take a brief look at what they are, what they do and how we can implement them. I’m a massive fan of material design. Everything about it provides a strong feeling of consistency between applications and as a whole makes them both easier and more aesthetically pleasing to use. Google I/O 2015 saw the introduction of some great new assets to the world of Android — including the new Design Support Library. With the introduction of this, there’s now no excuse not to follow the Material Design Guidelines provided by Google. Let’s take a look at these new out-of-the-box components that we now have available to us. Mostly inheriting the same methods and attributes as the Toast component, the Snackbar is a new component that allows us to show a quick message to the user at the bottom of the screen. Once animated in, the user can either interact with the Action (if one has been set) or dismiss the Snackbar by swiping it off the screen. If neither of these occurs, then it’ll automatically animate off of the screen after the given timeout.</p>
    </div>
@stop