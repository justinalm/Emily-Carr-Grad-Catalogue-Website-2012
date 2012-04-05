<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div class="search-form">
    <?php $search_text = "Search"; ?> 
    <form method="get" id="searchform"  
    action="<?php bloginfo('home'); ?>/"> 
    <input type="text" value="<?php echo $search_text; ?>"  
    name="s" id="s"  
    onblur="if (this.value == '')  
    {this.value = '<?php echo $search_text; ?>';}"  
    onfocus="if (this.value == '<?php echo $search_text; ?>')  
    {this.value = '';}" /> 
    <input type="hidden" id="searchsubmit" /> 
    </form>
</div>

