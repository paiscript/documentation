<div class="container hmm">
  <div class="row-fluid">
    <div class="col-md-3">
      <div class="list-group" style="position: fixed;">
        <a href="#" class="list-group-item active"><?=__('Download PAI');?></a>
        <a href="#" class="list-group-item"><?=__('Folder logic');?></a>
        <a href="#" class="list-group-item"><?=__('Main styling');?> (site.php)</a>
        <a href="#" class="list-group-item"><?=__('Framework settings');?> (pai.json)</a>
        <a href="#" class="list-group-item"><?=__('Page information');?> (pages.json)</a>
      </div>
    </div>
    
    <div class="col-md-9">
      <div class="page-header">
        <h1><?=__('Download PAI');?></h1>
      </div>
      
      <p class="lead"><?=__('Download PAI fresh of Github, perhaps a good idea to get the plugins you need at the same time.');?></p>
      
      <a href="#" class="btn btn-danger"><?=__('download PAI on github');?></a>
      
      <div class="page-header">
        <h1><?=__('Folder logic');?></h1>
      </div>
      <p class="lead"><?=__('Like everything else, then the file structure has some sort of intended logic to it.');?></p>
      <p><?=__('When you download PAI for the first time, you will find a lot more then the files listed below. These are the absolute minimum required to have PAI up and running. Tho the downloaded version has a bit more files, then those files are usually required and therefor make things easier.');?></p>
      <div class="highlight"><pre><code class="bash">www/
├── content/
│   ├── languages
│   ├── load.php
│   ├── page
│   ├── pages.json
│   ├── site.php
├── pai/
│   ├── Loads of files that don't need to be touch, like, ever. So we won't list them.
└── pai_plugins/
    ├── 
</code></pre></div>
      
      <h3><?=__('whats what');?></h3>
      <p><?=__('Each folder represents its own core functionality.');?></p>
      
      <strong>content</strong>
      <p><?=__('This is "your" folder. Pages, design, php code and basically everything related to your site goes in this folder. Therefor the name "content".');?></p>
      
      <strong>pai</strong>
      <p><?=__('PAIs core folder. This is where all the magic happens, in most cases none of the files in this folder needs to be touched for you to make fully use of your site as you else would.');?></p>
      
      <strong>pai_plugins</strong>
      <p><?=__('You can download several plugins for pai, by uploading them to this folder you allow pai.json to make PAI even more powerful.');?></p>
      
      <div class="page-header">
        <h1><?=__('site.php basic setup');?></h1>
      </div>
      
      <p class="lead"><?=__('The basic requirement for PAI are extremely small.');?></p>
      <p><?=__('Copy the following into content/site.php to have the absolute bare minimum to get started.');?></p>
      
      <div class="highlight"><pre><code class="php"><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html&gt;</span>
  <span class="nt">&lt;head&gt;</span>
    <span class="nt">&lt;title&gt;</span>&lt;?php pai_title(); ?&gt;<span class="nt">&lt;/title&gt;</span>
    <span class="c"></span>
    <span class="nt">&lt;meta name="description" content="&lt;?php echo @pai_pageInfo('description')?&gt;"&gt;</span>
    <span class="c">&lt;meta name="keywords" content="&lt;?php echo @pai_pageInfo('keywords')?&gt;"&gt;</span>
    <span class="c"></span>
<span class="c">    &lt;?php pai_head(); ?&gt;</span>
  <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt"></span>
    <span class="nt">&lt;div id="content"&gt;</span>
      <span class="nt">&lt;?php pai_content('page')?&gt;</span>
    <span class="c">&lt;/div&gt;</span>
    <span class="c"></span>
    <span class="c">/* Or prototype, whatever floats your boat */</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"//code.jquery.com/jquery.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="nt"></span>
    <span class="c">&lt;?php pai_footer(); ?&gt;</span>
    <span class="nt"></span>
  <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre></div>
      
      <div class="page-header">
        <h1>pai.json</h1>
      </div>
      <p class="lead"><?=__('pai.json is the hearth of PAI and is vital for its functionality. From pai.json you can completely alter and control the behavior of your website');?></p>
      
      <div class="highlight">
        <pre class="pre-scrollable"><code class="php"><span class="c">{</span>
  <span class="c">"ajax": {</span>
    <span class="c">"useSourceFiles": true,</span>
    <span class="c">"framework": "jquery"</span>
  <span class="c">},</span>
  <span class="c">"content": {</span>
    <span class="c">"header": {</span>
      <span class="c">"type": "pagevar",</span>
      <span class="c">"name": "title",</span>
      <span class="c">"id": "header"</span>
    <span class="c">},</span>
    <span class="c">"page": {</span>
      <span class="c">"type": "path",</span>
      <span class="c">"default": "404"</span>
    <span class="c">},</span>
    <span class="c">"sidebar": {</span>
      <span class="c">"type": "map",</span>
      <span class="c">"default": "default",</span>
      <span class="c">"map": {</span>
        <span class="c">"test": ["test"],</span>
        <span class="c">"default": ["index"]</span>
      <span class="c">},</span>
      <span class="c">"exclude": ["form"]</span>
    <span class="c">},</span>
    <span class="c">"intervaltest": {</span>
      <span class="c">"type": "filter",</span>
      <span class="c">"interval": {</span>
        <span class="c">"pageChange": false,</span>
        <span class="c">"frequency": 10,</span>
        <span class="c">"decay": 1</span>
      <span class="c">}</span>
    <span class="c">},</span>
    <span class="c">"breadcrumb": {</span>
      <span class="c">"type": "filter"</span>
    <span class="c">}</span>
  <span class="c">},</span>
  <span class="c">"plugins": {</span>
    <span class="c">"locale": {</span>
      <span class="c">"status": true,</span>
      <span class="c">"available": ["en", "no"],</span>
      <span class="c">"default": "en",</span>
      <span class="c">"pageinfo": [</span>
        <span class="c">"title",</span>
        <span class="c">"description"</span>
      <span class="c">]</span>
    <span class="c">},</span>
    <span class="c">"menu": {</span>
      <span class="c">"status": true,</span>
      <span class="c">"currentClass": "current",</span>
      <span class="c">"id": "navigation",</span>
      <span class="c">"list": {</span>
        <span class="c">"main": {</span>
          <span class="c">"currentClass": "active"</span>
        <span class="c">}</span>
      <span class="c">}</span>
    <span class="c">},</span>
    <span class="c">"piwik": {</span>
      <span class="c">"status": true,</span>
      <span class="c">"baseUrl": "//analytics.wearelogik.com/",</span>
      <span class="c">"siteId": 10</span>
    <span class="c">},</span>
    <span class="c">"phperror": true</span>
  <span class="c">}</span>
<span class="c">}</span></code></pre>
      </div>
      
      <h2><?=__();?></h2>
      <p><?=__('At a first glance it might look like much, but this file and its options are actually extremely easy and simple');?></p>
      
      <h4>ajax</h4>
      
      <p>
        <strong>useSourceFiles</strong>
        <p style="margin-bottom: 2px;">???</p>
        <small class="text-muted"><?=__('Options');?>: true false</small>
      </p>
      
      <p>
        <strong>framework</strong>
        <p style="margin-bottom: 2px;"><?=__('Choose if you want to use the jQuery or Prototype framework.');?></p>
        <small class="text-muted"><?=__('Options');?>: "jquery" "prototype"</small>
      </p>
      
      <p>
        <strong>required</strong>
        <p style="margin-bottom: 2px;"><?=__('');?></p>
        <small class="text-muted"><?=__('Options');?>: true false</small>
      </p>
      
      <p>
        <strong>loadingText</strong>
        <p style="margin-bottom: 2px;"><?=__('Define what is displayed when the page is loading.');?></p>
        <small class="text-muted"><?=__('Options');?>: <?=__('string, int, html etc');?></small>
      </p>
      
      <p>
        <strong>clickEventName</strong>
        <p style="margin-bottom: 2px;"><?=__('');?></p>
        <small class="text-muted"><?=__('Options');?>: "click"</small>
      </p>
      
      <p>
        <strong>resetScroll</strong>
        <p style="margin-bottom: 2px;"><?=__('Define if you want to reset the scroll on page change or not.');?></p>
        <small class="text-muted"><?=__('Options');?>: true false</small>
      </p>
      
      <p>
        <strong>endpoint</strong>
        <p style="margin-bottom: 2px;"><?=__('Location of pais ajax.php file, usually no need to touch.');?></p>
        <small class="text-muted"><?=__('Options');?>: "pai/ajax.php"</small>
      </p>
      
      <p>&nbsp;</p>
      
      <h4>content</h4>
      
      <p>
        <strong>page / header / sidebar /</strong>
        <p style="margin-bottom: 2px;"><?=__('This is the contentbox title and can be defined per your request. In the demo above we have 5 contentboxes, tho, you can have one or 20 if you want to. Each contentbox is its own window and can be refreshed independently.');?></p>
        <small class="text-muted"><?=__('Options');?>: page is required</small>
      </p>
      
      <p>
        <strong>default</strong>
        <p style="margin-bottom: 2px;"><?=__('Default file if the requested on does not exists. Typically how you define a 404 page.');?></p>
        <small class="text-muted"><?=__('Options');?>: "404"</small>
      </p>
      
      <p>
        <strong>id</strong>
        <p style="margin-bottom: 2px;"><?=__('<div id="" of the wrapping element around this contentbox');?></p>
        <small class="text-muted"><?=__('Options');?>: string</small>
      </p>
      
      <p>
        <strong>name</strong>
        <p style="margin-bottom: 2px;"><?=__('');?></p>
        <small class="text-muted"><?=__('Options');?>: </small>
      </p>
      
      <p>
        <strong>type</strong>
        <p style="margin-bottom: 2px;"><?=__('Define how the contentbox should behave.');?></p>
        <small class="text-muted"><?=__('Options');?>: filter path map</small>
      </p>
        
      <div class="well well-sm">
        <p>
          <strong>filter</strong><br />
          <?=__('Woot woot?');?>
        </p>
        
        <p>
          <strong>path</strong><br />
          <?=__('Woot woot?');?>
        </p>
        
        <p>
          <strong>map</strong><br />
          <?=__('Woot woot?');?>
        </p>
      </div>
      
      <div class="page-header">
        <h1>pages.json</h1>
      </div>
      
      <p class="lead"><?=__('pages.json is the "control center" for all your page information. It contains the title, description and other vital parts of all of your pages that make PAI function');?></p>
      
      <div class="highlight"><pre><code class="php"><span class="nt">{</span>
  <span class="nt">"404": {</span>
    <span class="nt">"title": "404 - Page not found",</span>
    <span class="c">"static": true</span>
  <span class="nt">},</span>
  <span class="c"></span>
  <span class="c">"index": {</span>
    <span class="c">"title": "Welcome",</span>
    <span class="c">"description": "PAI (PHP Ajax Include) is a simple, yet extremely usefull framework for PHP and Javascript.",</span>
    <span class="c">"keywords": "php,javascript,framework,php framework,javascript framework,opensource"</span>
  <span class="c">}</span>
<span class="c">}</span>
</code></pre></div>

      <p><?=__('No pages requires to be defined in pages.json, but most of the page information like the title, description and keywords are pulled from this file. If you choose to use the menu plugin, then this file and its information is used.');?></p>

      <h3><?=__('Options');?></h3>
      
      <p>
        <strong>title</strong><br />
        <?=__('Sets the title of the page, used in the head section of site.php');?>
      </p>
      
      <p>
        <strong>description</strong><br />
        <?=__('Set the description for the page, this is used by head in site.php and will dynamically change for each page.');?>
      </p>
      
      <p>
        <strong>keywords</strong><br />
        <?=__('Same as description, but for keywords instead.');?>
      </p>
      
      <p>
        <strong>static</strong><br />
        <?=__('Set if the page is a static page, by setting this you improve the caching for that specific page. Which then resolves to saving resources.');?>
      </p>
    </div>
  </div>
</div>