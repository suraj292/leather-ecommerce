<div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>image</th>
            <th>title</th>
            <th>price</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td> title </td>
                <td class="text-success text-uppercase"> image </td>
                <td> price </td>
            </tr>
        </tbody>
    </table>
    <hr>

    <style>

        .container {
            max-width: 600px;
            margin: 50px auto
        }

        .searchbar {
            position: relative;
            min-width: 50px;
            width: 0%;
            height: 50px;
            float: right;
            overflow: hidden;
            -webkit-transition: width 0.3s;
            -moz-transition: width 0.3s;
            -ms-transition: width 0.3s;
            -o-transition: width 0.3s;
            transition: width 0.3s
        }

        .searchbar-input {
            top: 0;
            right: 0;
            border: 0;
            outline: 0;
            background: #6200EA;
            width: 100%;
            height: 50px;
            margin: 0;
            padding: 0px 55px 0px 20px;
            font-size: 20px;
            color: #fff
        }

        .searchbar-input::-webkit-input-placeholder {
            color: #fff
        }

        .searchbar-input:-moz-placeholder {
            color: #fff
        }

        .searchbar-input::-moz-placeholder {
            color: #fff
        }

        .searchbar-input:-ms-input-placeholder {
            color: #fff
        }

        .searchbar-icon,
        .searchbar-submit {
            width: 50px;
            height: 50px;
            display: block;
            position: absolute;
            top: 0;
            font-family: verdana;
            font-size: 22px;
            right: 0;
            padding: 0;
            margin: 0;
            border: 0;
            outline: 0;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            color: #fff;
            background: #6200EA;
            border-left: 1px solid white
        }

        .searchbar-open {
            width: 100%
        }
    </style>

    <div class="container">
        <form class="searchbar">
            <input type="search" placeholder="Search here" name="search" class="searchbar-input" onkeyup="buttonUp();" required>
            <input type="submit" class="searchbar-submit" value="GO">
            <span class="searchbar-icon">
            <i class="fa fa-search" aria-hidden="true"></i>
        </span>
        </form>
    </div>



</div>
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script>
        $(document).ready(function(){
            var submitIcon = $('.searchbar-icon');
            var inputBox = $('.searchbar-input');
            var searchbar = $('.searchbar');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchbar.addClass('searchbar-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchbar.removeClass('searchbar-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
            submitIcon.mouseup(function(){
                return false;
            });
            searchbar.mouseup(function(){
                return false;
            });
            $(document).mouseup(function(){
                if(isOpen == true){
                    $('.searchbar-icon').css('display','block');
                    submitIcon.click();
                }
            });
        });
        function buttonUp(){
            var inputVal = $('.searchbar-input').val();
            inputVal = $.trim(inputVal).length;
            if( inputVal !== 0){
                $('.searchbar-icon').css('display','none');
            } else {
                $('.searchbar-input').val('');
                $('.searchbar-icon').css('display','block');
            }
        }
    </script>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@endsection
