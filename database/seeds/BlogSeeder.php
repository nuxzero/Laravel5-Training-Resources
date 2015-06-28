<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tag')->delete();

        DB::table('blog')->delete();

        // Blog 1
        DB::table('blog')->insert([
            [
                'id' => '1',
                'title' => 'Exploring the new Android Design Support Library',
                'description' => 'This new library introduces several new components previously not available out-of-the-box. Here we take a brief look at what they are, what they do and how we can implement them. I’m a massive fan of material design. Everything about it provides a strong feeling of consistency between applications and as a whole makes them both easier and more aesthetically pleasing to use. Google I/O 2015 saw the introduction of some great new assets to the world of Android — including the new Design Support Library. With the introduction of this, there’s now no excuse not to follow the Material Design Guidelines provided by Google. Let’s take a look at these new out-of-the-box components that we now have available to us. Mostly inheriting the same methods and attributes as the Toast component, the Snackbar is a new component that allows us to show a quick message to the user at the bottom of the screen. Once animated in, the user can either interact with the Action (if one has been set) or dismiss the Snackbar by swiping it off the screen. If neither of these occurs, then it’ll automatically animate off of the screen after the given timeout.',
                'public_date' => '2015-06-17',
                'author' => 'Abdul Jaleel',
                'category_id' => '2',
                'views' => '122320',
            ],
            [
                'id' => '2',
                'title' => 'Cook Up Your Build Variants!',
                'description' => 'If you have a staging and production environment on your server side and you are now developing a mobile app, you will find this post very useful! During development, you may encounter some challenges:
                 How to make the mobile app work with both environments. How to switch between them with ease and increase productivity. And, most important, how to keep the code clean and without this logic wired into it. Gradle and Android Studio are a powerful combination that provide product variants as a way to overcome these barriers.',
                'public_date' => '2015-06-13',
                'author' => 'Wolox Engineering',
                'category_id' => '2',
                'views' => '24220',
            ],
            [
                'id' => '3',
                'title' => '27 iOS open source libraries to skyrocket your development.',
                'description' => 'I love open source.
And I love the developers, who spend their valuable private time creating amazing things, which then they share with other people and don’t want anything in return. Open source authors and contributors, you are awesome people. Thank you for all your work.

So, as I’m a big fan of curation, here I’ve selected favorites from my favorites iOS open source libraries. Order of these projects is totally random, all of them are simply awesome.

The overwhelming majority of the libraries support CocoaPods, so adding them to your Xcode project is a breeze.

On the bottom of the article you will find a TL;DR version — a simple list with only titles and links to the projects. If you’ll find this article useful, share it with your iOS dev buddies. Good things need to spread.',
                'public_date' => '2015-05-29',
                'author' => 'Paweł Białecki',
                'category_id' => '3',
                'views' => '9000',
            ],
            [
                'id' => '4',
                'title' => 'Bye-Bye Selfie Over. Hello Twicer!',
                'description' => 'Selfie Over was a great name to describe our video-in-video concept but we didn’t want to enter the “Selfie” buzzword arena. More than just a video tool, we want to build something that lets you give a more accurate version of your world. That’s why we have chosen glasses as our logo: they make everybody’s point of view more colorful.',
                'public_date' => '2015-04-14',
                'author' => 'Twicer',
                'category_id' => '3',
                'views' => '63453',
            ],
            [
                'id' => '5',
                'title' => 'The Future of Web Design is Hidden in the History of Architecture',
                'description' => 'The history of Western architecture can teach us a lot about the evolution of web design. As forms of art, both are defined by several factors:

They serve as places where other people go.
They’re engineered to do this pragmatic job.
The evolution of technology limits this engineering.
And yet, they’re definitely still art.
Within these constraints, both have progressed along remarkably similar paths, building on the past and reacting to it in similar ways. If you want to know where web design is heading, just look at where architecture has already gone.',
                'public_date' => '2015-05-13',
                'author' => 'Mike Sall',
                'category_id' => '1',
                'views' => '987876',
            ],
            [
                'id' => '6',
                'title' => 'Modern minimalism IS the right choice',
                'description' => '’ve been reading with interest the brilliantly written opinion pieces ‘Fall of the Designer’ by Eli Schiff recently. If you haven’t read them and are interested in the history of trends in the digital design world, they are certainly worth a read.

The problem is I disagree with him completely.

His arguments mainly centre around how the rise of flat design or the ‘modern minimalist’ movement ushered in by iOS7 and Material design have desensitised and devalued the work of visual designers in the digital world.',
                'public_date' => '2015-05-03',
                'author' => 'Andrew Burton',
                'category_id' => '1',
                'views' => '6547',
            ],

        ]);

        //
        DB::table('blog_tag')->insert([
            ['blog_id' => '1', 'tag_id' => '1'],
            ['blog_id' => '1', 'tag_id' => '5'],
            ['blog_id' => '1', 'tag_id' => '3'],
            ['blog_id' => '2', 'tag_id' => '5'],
            ['blog_id' => '2', 'tag_id' => '1'],
            ['blog_id' => '3', 'tag_id' => '6'],
            ['blog_id' => '3', 'tag_id' => '4'],
            ['blog_id' => '3', 'tag_id' => '3'],
            ['blog_id' => '4', 'tag_id' => '6'],
            ['blog_id' => '4', 'tag_id' => '1'],
            ['blog_id' => '4', 'tag_id' => '2'],
            ['blog_id' => '5', 'tag_id' => '7'],
            ['blog_id' => '5', 'tag_id' => '2'],
            ['blog_id' => '5', 'tag_id' => '4'],
            ['blog_id' => '6', 'tag_id' => '3'],
            ['blog_id' => '6', 'tag_id' => '7'],
        ]);
    }
}
