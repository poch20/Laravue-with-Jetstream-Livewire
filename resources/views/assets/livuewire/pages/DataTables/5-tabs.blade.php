<ul class="tabs">
  <li class="active">Javascript</li>
  <li>HTML</li>
  <li>CSS</li>
  <li>Ajax</li>
  <li>Server-side script</li>
  <li class="comment-count">Comments</li>
</ul>


<div class="tabs">
  <div class="js">
    <p>The Javascript shown below is used to initialise the table shown in this example:</p>
    <code class="multiline language-js">
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </code>
    <p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
    <ul>
      <li>
        <a href="https://code.jquery.com/jquery-3.5.1.js">https://code.jquery.com/jquery-3.5.1.js</a>
      </li>
      <li>
        <a href="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js</a>
      </li>
      <li>
        <a href="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js">https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js</a>
      </li>
    </ul>
  </div>
  <div class="table">
    <p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
  </div>
  <div class="css">
    <div>
      <p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
      additional CSS used is shown below:</p><code class="multiline language-css"></code>
    </div>
    <p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
    <ul>
      <li>
        <a href=
        "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css</a>
      </li>
      <li>
        <a href=
        "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css</a>
      </li>
    </ul>
  </div>
  <div class="ajax">
    <p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
    loaded.</p>
  </div>
  <div class="php">
    <p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP.
    Server-side processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
    documentation</a>.</p>
  </div>
  <div class="comments">
    <div class="comments-insert"></div>
  </div>
</div>
