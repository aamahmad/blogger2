<b:if cond='data:blog.url == data:blog.homepageUrl'>
  <!-- do something -->
    <style>
    /* Bigger than 992 */
    @media (min-width: 992px) {
    .date-outer {
        width: 50%;
        float: left;
    }
    }

    .date-outer {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .date-posts{
    	float: left; 
    	margin-bottom: 20px; 
    	display: block;
        background-color: #fff;
        border: 1px solid #ddd;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
    }

    .thumbnail-post {
    	width: 40%;
    	float: left;
    	border: 1px;
    }
    .judul2 {
    	width: 60%;
    	float: left;
    	border: 1px;
    }
    .post-body{}
    .post-body h3 {margin:7px; font-size: 16px; color:#ddd;}

    .post-footer {float:left;}

    </style>
</b:if>