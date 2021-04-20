<!DOCTYPE html>
<html>
<head>
    <style>
        * {box-sizing: border-box;}
        ul {list-style-type: none;}
        body {font-family: Verdana, sans-serif;}

        .month {
            padding: 15px 25px;
            width: 100%;
            background: #1abc9c;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 5px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 5px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }
        .days li .today {
            padding: 5px;
            background: white;
            outline-color: #1abc9c;
            color: #777 !important
        }
        .days li .miss {
            padding: 5px;
            background: red;
            outline-color: #1abc9c;
            color: #777 !important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:720px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }
    </style>
</head>
<body>

<h1>Daily Habit Streak</h1>

<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
            August<br>
            <span style="font-size:18px">2021</span>
        </li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</span></li>
    <li><span class="active">10</span></li>
    <li><span class="active">11</span></li>
    <li><span class="active">12</span></li>
    <li><span class="active">13</span></li>
    <li><span class="active">14</span></li>
    <li><span class="miss">15</span></li>
    <li><span class="active">16</span></li>
    <li><span class="active">17</span></li>
    <li><span class="active">18</span></li>
    <li><span class="active">19</span></li>
    <li><span class="today">20</li>
    <li>21</li>
    <li>22</li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
    <li>31</li>
</ul>

</body>
</html>
