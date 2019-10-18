<div class="inputMer">
    <ul>
        {foreach from=$arrayMeridien item=meridien}
            <li><input type="checkbox" name="f{$meridien.code}" id="f{$meridien.code}"/><label for="f{$meridien.code}">{$meridien.nom}</label></li>
        {/foreach}
    </ul>
</div>