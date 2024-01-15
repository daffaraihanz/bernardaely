<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/typeface.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Bernardaely</title>
    <style>
        .disNone {
            display: none;
        }

        .disBlock {
            display: block;
        }
    </style>
    <script>
        function changeCss() {
            var bodyElementFirst = document.querySelector(".first");
            var bodyElement = document.querySelector(".second");
            // var navElement = document.querySelector("nav");
            this.scrollY > 1000 ? bodyElement.style.background = '#16191D' : bodyElement.style.background = '#2C4F47';
            this.scrollY > 1000 ? bodyElementFirst.style.background = '#16191D' : bodyElementFirst.style
                .background = '#2C4F47';
        }

        window.addEventListener("scroll", changeCss, false);

        $(document).ready(function() {

            $('.crown').removeClass('.crownDisabled');



            $('#addCtaExperience').click(function() {
                $('#addCtaExperienceForm').removeClass('disNone');
                $('#addCtaExperience').addClass('disNone');
                $('#cancelCtaExperience').removeClass('disNone');
                $('#storeCtaExperience').removeClass('disNone');
            });
            $('#addCtaSkill').click(function() {
                $('#addCtaSkillForm').removeClass('disNone');
                $('#addCtaSkill').addClass('disNone');
                $('#cancelCtaSkill').removeClass('disNone');
                $('#storeCtaSkill').removeClass('disNone');
            });
            $('#addCtaEdu').click(function() {
                $('#addCtaEduForm').removeClass('disNone');
                $('#addCtaEdu').addClass('disNone');
                $('#cancelCtaEdu').removeClass('disNone');
                $('#storeCtaEdu').removeClass('disNone');
            });
            $('#addCtaSocial').click(function() {
                $('#addCtaSocialForm').removeClass('disNone');
                $('#addCtaSocial').addClass('disNone');
                $('#cancelCtaSocial').removeClass('disNone');
                $('#storeCtaSocial').removeClass('disNone');
            });
            $('#addCtaShowcase').click(function() {
                $('#addCtaShowcaseForm').removeClass('disNone');
                $('#addCtaShowcase').addClass('disNone');
                $('#cancelCtaShowcase').removeClass('disNone');
                $('#storeCtaShowcase').removeClass('disNone');
            });

            $('#cancelCtaExperience').click(function() {
                $('#addCtaExperienceForm').addClass('disNone');
                $('#addCtaExperience').removeClass('disNone');
                $('#cancelCtaExperience').addClass('disNone');
                $('#storeCtaExperience').addClass('disNone');
            });
            $('#cancelCtaSkill').click(function() {
                $('#addCtaSkillForm').addClass('disNone');
                $('#addCtaSkill').removeClass('disNone');
                $('#cancelCtaSkill').addClass('disNone');
                $('#storeCtaSkill').addClass('disNone');
            });
            $('#cancelCtaEdu').click(function() {
                $('#addCtaEduForm').addClass('disNone');
                $('#addCtaEdu').removeClass('disNone');
                $('#cancelCtaEdu').addClass('disNone');
                $('#storeCtaEdu').addClass('disNone');
            });
            $('#cancelCtaSocial').click(function() {
                $('#addCtaSocialForm').addClass('disNone');
                $('#addCtaSocial').removeClass('disNone');
                $('#cancelCtaSocial').addClass('disNone');
                $('#storeCtaSocial').addClass('disNone');
            });
            $('#cancelCtaShowcase').click(function() {
                $('#addCtaShowcaseForm').addClass('disNone');
                $('#addCtaShowcase').removeClass('disNone');
                $('#cancelCtaShowcase').addClass('disNone');
                $('#storeCtaShowcase').addClass('disNone');
            });


        });
    </script>
</head>

<body>
    @yield('main-structure')
</body>

<body style="background: #16191D;">
    @yield('main-structure-detail')


</body>

</html>
