<html ng-app="app">
<head>
<!--[if lte IE 10]>
    <script type="text/javascript">document.location.href ='/unsupported-browser'</script>
    <![endif]-->
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <md-button class="md-raised md-primary">Welcome to Angular Material</md-button>
    <div ui-view="main"></div>
	<div ui-view="footer"></div>

    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>