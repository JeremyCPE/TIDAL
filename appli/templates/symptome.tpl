<div class="">
    <p>Test</p>
    <ul>
        {foreach from=$arraySymptome item=symptome}
            <li><p>{$symptome.desc}</p></li>
        {/foreach}
    </ul>
</div>