<fieldset id="fs_patho" class="inputPatho">
    <legend>Pathologies</legend>
    <input list=patho-list id="patho-choice"/>
    <div class="inputPatho">
    <datalist id=patho-list>
        {foreach from=$arrayPatho item=patho}
           <option value="{$patho.desc}"/>
        {/foreach}
    </datalist>
        
    </div>
</fieldset>






