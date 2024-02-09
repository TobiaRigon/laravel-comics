
@extends('layouts.main-layout')

@section('head')
    <title>Home</title>
@endsection

@section('content')
<main>
<div class="my_jumbo">
    <img src="/img/jumbotron.jpg" alt="">
</div>

    <div class="my_container">
        <div id="current" class="my_badge">Current series</div>
        <ul class="my_comics-list">
            @foreach($comics as $comic)
                <li>
                    <div class="my_prod_card">
                        <img src="https://via.placeholder.com/200x240" alt="{{ $comic['title'] }}">
                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="#" id="load" class="my_badge">Load more</a>
    </div>
</main>

<style lang="scss">
    main{
        background-color: #181818;
            padding-bottom: 30px;


            .my_jumbo {
            max-height: 300px;
            overflow: hidden;

        }

        .my_jumbo img {
            width: 100%;
            object-fit: cover;
        }



        .my_badge {
            background-color: #007bff;
            padding: 10px 20px;
            text-transform: uppercase;
            font-weight: 600;
            color: white;
            text-decoration: none;
            display: inline-block;
        }

        ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            margin: 40px auto;
            gap: 15px;

            li {
                flex: 0 0 15%;
                display: flex;
                flex-direction: column;
                margin:20px 0;


                .my_prod_card {
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                }

                img {
                    width: 200px;
                    height: 240px;
                }

                h3 {
                    padding-top: 15px;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-weight: 600;
                    color: #a6a6a6;
                    margin: 0;
                }
            }
        }

        #current {
            position: relative;
            transform: translate(-200% , -50%);
            top: 0;
            left: 0;
        }

        .my_container {
            width: 90%;
            margin: 0 auto;
        }
    }

</style>
@endsection
