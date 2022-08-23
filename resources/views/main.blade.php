@extends('layout')
    @section('title')
        Главная страница
    @endsection
    @section('content')
        <div class="p-0 container-fluid">
            <div class="row mb-2 mb-xl-3 mx-0">
                <div class="col-auto">
                    <h3>Доступные тесты</h3>
                </div>
                <div class="ms-auto text-end col-auto">
                </div>
            </div>
            <div class="row gap-3 mx-0">
                @foreach ($tests as $test)
                    <div class="col-xxl-3 col-lg-6 col-sm-12 card p-0" data-test-id="{{$test->id}}">
                        <div class="card__preview"></div>
                        <div class="card__content">
                            <span class="card__tag mb-3">{{$test->test_category}}</span>
                            <h4 class="card__title mb-3">{{$test->test_title}}</h4>
                            <p class="card__desc mb-3">{{$test->test_desc}}</p>
                            <button type="button" class="btn btn-open btn-primary mt-auto mb-4">Пройти</button>
                            <div class="author">
                                {{-- <img class="author__avatar" src="" alt="">
                                <div class="author__info">
                                  <h5>Клочков Роман  Анатольевич</h5>
                                  <small>2022-08-20</small>
                                </div> --}}
                              </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
