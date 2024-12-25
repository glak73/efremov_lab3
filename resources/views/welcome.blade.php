@extends('layouts.app')
@section('content')
    <div class="container">
        <img src="{{ asset('storage/images/london system.jpg') }}" alt="Описание изображения" class="chess_board_image">
        <div class="container-column">
            <p>Лондонская система — шахматный дебют, начинающийся ходами:
            <ul>
                <li>
                    1. d2-d4 d7-d5
                </li>
                <li>
                    2. Кg1-f3 Кg8-f6
                </li>
                <li>
                    3. Cc1-f4
                </li>
            </ul>
            </p>
            <p>
                Относится к закрытым началам. Лондонская система появилась в XIX веке. Первая сохранившаяся партия —
                Лабурдонне —
                Мак-Доннелл (Лондон, 1834). Этот поединок был начат ходами

            <ul>
                <li>1.d4 d5</li>
                <li> 2.Сf4 c5 </li>
                <li>3.e3 Кc6</li>
                <li>4.Кf3 Сg4 </li>
                <li>5.Сe2 Сxf3 </li>
                <li>6.Сxf3 e6</li>
            </ul>
            </p>


        </div>

    </div>
    <div class="">
        <p>на <a href="{{route('variants')}}">данной странице</a> вы можете ознакомиться с основными вариантами продолжений лондонской
            партии при различных ответах черных</p>
    </div>
@endsection
