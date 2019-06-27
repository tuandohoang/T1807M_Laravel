<!doctype html>
<html lang="en">
@include("book.head")
<body>
<header>
    Day la header
</header>
<div class="col-xs-6 col-xs-offset-3">
    @yield("main_content")
</div>
<footer>
    Day la footer
</footer>
    @yield("popup")
</body>
</html>