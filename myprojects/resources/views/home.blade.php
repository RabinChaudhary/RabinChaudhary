@extends('master')

@section('title', 'Home page')
@section('content')
    @push('style')
        <style>
            .card {
                margin: 0 auto;
            }

            h5.card-title {
                font-size: 4rem;
            }

            .center {
                display: flex;
                justify-content: center;

            }

        </style>


        <div class="card" style="width: 78%;">
            <div class="card-body">
                <h5 class="card-title">Laravel Demonstration</h5>
                <h6 class="card-subtitle mb-2 text-muted">Version 9</h6>
                <p class="card-text">This web-application is about user registration and how to store users data in the data
                    base using laravel framework,npm, bootstrap, jquery, phpmyadmin. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Aliquam nostrum expedita enim earum sit aperiam fugit, reiciendis fuga consectetur
                    laudantium doloribus distinctio repellat omnis tenetur suscipit? Recusandae inventore quaerat dolor enim,
                    autem eligendi vitae. Dicta, id! Expedita nostrum excepturi error repellat ex tempora, quas atque deleniti
                    minus cumque exercitationem, dolorum non ad labore esse! Ad mollitia similique, animi est quibusdam eius.
                    Suscipit impedit hic sint officiis ipsa debitis deleniti architecto quam sit necessitatibus. Nam beatae
                    quibusdam fugiat quae impedit, ipsam vel provident culpa magni dignissimos quo in architecto officia
                    voluptatem quaerat similique? Culpa accusamus labore nihil vel optio minima fugiat?</p>
                <div class="center">
                    <a href="/login" class="card-link">Sign In</a>
                    <a href="/register" class="card-link">Sign-up</a>
                </div>
            </div>
        </div>
    @endsection
