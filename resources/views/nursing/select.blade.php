
CURRENT DATE: <select name="dateselect" id="dateselect" style="width:5%" onchange="dashboardselectmain()">
    @if ($dateid == '01')
        <option selected value="01">01</option>
    @else
        <option value="01">01</option>
    @endif
    
    @if ($dateid == '02')
        <option selected value="02">02</option>
    @else
        <option value="02">02</option>
    @endif

    @if ($dateid == '03')
        <option selected value="03">03</option>
    @else
        <option value="03">03</option>
    @endif

    @if ($dateid == '04')
        <option selected value="04">04</option>
    @else
        <option value="04">04</option>
    @endif

    @if ($dateid == '05')
        <option selected value="05">05</option>
    @else
        <option value="05">05</option>
    @endif

    @if ($dateid == '06')
        <option selected value="06">06</option>
    @else
        <option value="06">06</option>
    @endif

    @if ($dateid == '07')
        <option selected value="07">07</option>
    @else
        <option value="07">07</option>
    @endif

    @if ($dateid == '08')
        <option selected value="08">08</option>
    @else
        <option value="08">08</option>
    @endif

    @if ($dateid == '09')
        <option selected value="09">09</option>
    @else
        <option value="09">09</option>
    @endif

    @if ($dateid == '10')
        <option selected value="10">10</option>
    @else
        <option value="10">10</option>
    @endif

    @if ($dateid == '11')
        <option selected value="11">11</option>
    @else
        <option value="11">11</option>
    @endif

    @if ($dateid == '12')
        <option selected value="12">12</option>
    @else
        <option value="12">12</option>
    @endif

    @if ($dateid == '13')
        <option selected value="13">13</option>
    @else
        <option value="13">13</option>
    @endif

    @if ($dateid == '14')
        <option selected value="14">14</option>
    @else
        <option value="14">14</option>
    @endif

    @if ($dateid == '15')
        <option selected value="15">15</option>
    @else
        <option value="15">15</option>
    @endif

    @if ($dateid == '16')
        <option selected value="16">16</option>
    @else
        <option value="16">16</option>
    @endif

    @if ($dateid == '17')
        <option selected value="17">17</option>
    @else
        <option value="17">17</option>
    @endif

    @if ($dateid == '18')
        <option selected value="18">18</option>
    @else
        <option value="18">18</option>
    @endif

    @if ($dateid == '19')
        <option selected value="19">19</option>
    @else
        <option value="19">19</option>
    @endif

    @if ($dateid == '20')
        <option selected value="20">20</option>
    @else
        <option value="20">20</option>
    @endif

    @if ($dateid == '21')
        <option selected value="21">21</option>
    @else
        <option value="21">21</option>
    @endif

    @if ($dateid == '22')
        <option selected value="22">22</option>
    @else
        <option value="22">22</option>
    @endif

    @if ($dateid == '23')
        <option selected value="23">23</option>
    @else
        <option value="23">23</option>
    @endif

    @if ($dateid == '24')
        <option selected value="24">24</option>
    @else
        <option value="24">24</option>
    @endif

    @if ($dateid == '25')
        <option selected value="25">25</option>
    @else
        <option value="25">25</option>
    @endif

    @if ($dateid == '26')
        <option selected value="26">26</option>
    @else
        <option value="26">26</option>
    @endif

    @if ($dateid == '27')
        <option selected value="27">27</option>
    @else
        <option value="27">27</option>
    @endif

    @if ($dateid == '28')
        <option selected value="28">28</option>
    @else
        <option value="28">28</option>
    @endif

    @if ($date[0]->thismonth == 29)
        @if ($dateid == '29')
            <option selected value="29">29</option>
        @else
            <option value="29">29</option>
        @endif
    @endif

    @if ($date[0]->thismonth == 30)
        @if ($dateid == '29')
            <option selected value="29">29</option>
        @else
            <option value="29">29</option>
        @endif

        @if ($dateid == '30')
            <option selected value="30">30</option>
        @else
            <option value="30">30</option>
        @endif
    @endif

    @if ($date[0]->thismonth == 31)
        @if ($dateid == '29')
            <option selected value="29">29</option>
        @else
            <option value="29">29</option>
        @endif

        @if ($dateid == '30')
            <option selected value="30">30</option>
        @else
            <option value="30">30</option>
        @endif

        @if ($dateid == '31')
            <option selected value="31">31</option>
        @else
            <option value="31">31</option>
        @endif
    @endif

</select>