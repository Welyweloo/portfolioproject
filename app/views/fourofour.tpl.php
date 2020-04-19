<script language="javascript">
    confirm = confirm('Attention, la page souhaitée n\'existe pas, souhaitez-vous allez sur la page d’accueil?');
    if(confirm == true)
    {
        window.location.href = '/';
    } 
    else 
    {
        history.back();
    }
  </script> 