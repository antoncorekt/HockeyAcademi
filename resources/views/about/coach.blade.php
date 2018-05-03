@extends('others.modal')
@section('title-modal')
    Coach {{$coach}}
@endsection
@section('content-modal')
<div class="img-modal">
    <img src="../../design/first_page/res/coach.jpg"/>
</div>
<div class="text-modal">
    <h4>Andriej Parfionow</h4>
    <p>Закончил что-то там. Занимается хоккеем с N лет. Имеет богатый тренерский опыт в N лет. Хоккей - это его жизнь.</p>
    <p>Был тренером лучших команд: </p>
    <ul>
        <li>Очень известная команда 1</li>
        <li>Очень известная команда 2</li>
        <li>Очень известная школа</li>
    </ul>
    <p>Andriej воспитал много чемпионов, среди которых:</p>
    <ul>
        <li>Очень известный хоккеист 1</li>
        <li>Очень известный хоккеист 2</li>
        <li>Очень известный хоккеист 3</li>
    </ul>
    <p style="color: black">Благодаря такому высококласнному специалисту Вы также можете стать звездой МИРОВОГО ХОККЕЯ!</p>
</div>

@endsection