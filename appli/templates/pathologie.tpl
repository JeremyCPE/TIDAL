<fieldset id="fs_patho" class="inputPatho">
    <legend>Pathologies</legend>
    <div class="inputPatho">
        {foreach from=$arrayPatho item=patho}
           <input type="checkbox" name="fp_{$patho.type}" id=fp_{$patho.type}"/><label for=fp_{$patho.type}">{$patho.nom}</label>
        {/foreach}
    </div>
</fieldset>






