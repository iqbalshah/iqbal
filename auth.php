<script language="php">
###########################################################################
# START AUTHENTICATION                                                    #
###########################################################################
	
import_request_variables("pgc","");

if (!($user)||(!($pass))) {	header("Location: index.php"); }

###########################################################################
# END AUTHENTICATION                                                      #
###########################################################################
</script>