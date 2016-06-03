var C={
	url:'',
	keywords:'',
	description:'',
	tag:'OwQ', // #{{tag}}=
	nav:[
		// tmp and page name, description, type[Article, Photos, Category, Links, laBs, Me]
		['home','难难','I'],
		['cate','分类','C'],
		['vsco','图库','P'],
		['link','友链','L'],
		['labs','实验室','B'],
		['me','关于','M'],
	],
	link:function(){return this[0]},
	title:function(){return this[1]},
};
// console.log(C.nav[0][1]);
