<footer class="nav justify-content-center my-4">
        <ul class="nav row">
            <li class="nav-item"><a class="nav-link" href="https://github.com/welyweloo" target="_blank"><i class="fab fa-github" data-toggle="tooltip" data-placement="top" title="GitHub Profile"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/aurelie-a-bb113987/" target="_blank"><i class="fab fa-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn Profile"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/0rely/" target="_blank"><i class="fab fa-instagram" data-toggle="tooltip" data-placement="top" title="Instagram Profile"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="/docs/cv_aurelie_maj_april_2020.pdf" target="_blank"><i class="fas fa-file-download" data-toggle="tooltip" data-placement="top" title="Aurelie's resume"></i></a></li>
        </ul>
        <p>Looking forward to see you again</p>
        
        
        
    </footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    frenchButton = document.getElementById('french');
    frenchButton.addEventListener('click', 
        function()
        {
            header("Location :". $_SERVER['BASE_URI']);
        }
    );

    englishButton = document.getElementById('english');
    englishButton.addEventListener('click', 
        function()
        {
            header("Location :".$_SERVER['BASE_URI']."/en");
        }
    );
</script>

</body>
</html>