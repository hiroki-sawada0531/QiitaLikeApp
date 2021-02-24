require('./bootstrap');

import marked from 'marked';


// マークダウンをプレビュー画面に表示する
$(function() {
	marked.setOptions({
		langPrefix: '',
		breaks : true,
		sanitize: true,
	});

	$('#markdown_editor_textarea').keyup(function() {
		var html = marked(getHtml($(this).val()));
		$('#markdown_preview').html(html);
	});

	// 比較演算子が &lt; 等になるので置換
	function getHtml(html) {
		html = html.replace(/&lt;/g, '<');
		html = html.replace(/&gt;/g, '>');
		html = html.replace(/&amp;/g, '&');
		return html;
	}
});