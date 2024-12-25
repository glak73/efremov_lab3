@extends('layouts.app')
@section('content')
    <div class="container-column">
        <h2>Варианты продолжения Лондонской системы</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Вариант ответа черных</th>
                    <th>Последовательность ходов</th>
                    <th>Описание возможного продолжения</th>
                    <th>Итоговая позиция</th>
                    <th>Ссылка на партию</th>
                </tr>
            </thead>
            <tbody>
                <!-- Здесь будут данные о вариантах -->
                <tr>
                    <td>1. Nf6</td>
                    <td>
                        <ul>

                            <li>
                                Bf4
                                g6
                            </li>
                            <li>
                                Nc3
                                Bg7
                            </li>
                            <li>
                                e4
                                d6
                            </li>
                            <li>
                                Qd2
                                O-O
                            </li>
                            <li>
                                O-O-O
                                Nbd7
                            </li>
                            <li>
                                e5
                                Nh5
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="table_text_block">черные выбирают индийскую защиту, отдавая белым возможность захватить
                            центр, взамен играя на королевском фланге</p>
                    </td>
                    <td><img src="{{ asset('storage/images/london kings indian.jpg') }}" alt="Итоговая позиция"
                            class="table_image"></td>
                    <td><a href="https://lichess.org/study/T6lyudck/FVlBGELC">Просмотреть партию</a></td>
                </tr>

                <tr>
                    <td>1. d5</td>
                    <td>
                        <ul>
                            <li>
                                d4
                                d5
                            </li>
                            <li>
                                Bf4
                                Nf6
                            </li>
                            <li>
                                e3
                            </li>
                        </ul>
                    </td>
                    <td>
                        <p class="table_text_block"> черные выбирают полуоткрытые позиции, возможен переход в ферзевый гамбит
                            ходом 2. c4</p>
                    </td>
                    <td><img src="{{ asset('storage/images/london d5.jpg') }}" alt="Итоговая позиция"
                        class="table_image"></td>
                        <td>
                            <a href="https://lichess.org/study/TQNzIfDs/ZylPcvVD">просмотреть партию</a>
                        </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
