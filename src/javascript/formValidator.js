//文档准备就绪就初始化配置
$(function() {
    //对那个表单做验证,注册页面验证
    $('#regForm')
        //调用验证方法，验证方法中是一个配置对象
        .bootstrapValidator({
            message: 'This value is not valid', //表单出错的全局提示信息
            //表单验证的状态提示图标
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //通过
                invalid: 'glyphicon glyphicon-remove', //失败
                validating: 'glyphicon glyphicon-refresh' //正在验证中
            },
            //对那些表单元素做验证
            fields: {
                //用户名验证
                username: {
                    message: '用户名验证失败', //表单出错的局部提示信息
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        //长度范围
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6~18位之间'
                        }
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        }
                    }
                },
                //确认密码验证
                password2: {
                    validators: {
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        //一致性的验证： identical完全相同
                        identical: {
	                        field: 'password1', //与那个字段做比较
	                        message: '两次密码输入不一致'
	                    }
                    }
                },
                //真实姓名
                realname: {
                    validators: {
                        notEmpty: {
                            message: '真实姓名不能为空'
                        }
                    }
                },
                //手机号码的验证
                mobile: {
                    validators: {
                        notEmpty: {
                            message: '手机号码必须填写'
                        },
                        //正则表达式的验证
                        regexp: {
				           regexp: /^[1][3,4,5,7,8,9][0-9]{9}$/,
				           message: '手机号码格式不正确，格式：13900000000'
	                    }
                    }
                },
                /*//性别的验证
                sex: {
                	validators:{
                		notEmpty: {
                            message: '请选择性别'
                        }
                	}
                },*/
                //同意注册协议
                isAgree: {
                	validators: {
                		//多个中必须选择一个
//              		choice: {
//	                        min: 1,
//                          max: 3, 
//	                        message: '请选择查看注册协议并同意'
//	                    },
						notEmpty: {
                            message: '请选择查看注册协议并同意'
                        }
                	}
                }
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function(e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator'); 
            // 使用ajax发送提交表单的数据请求
            var postData=$form.serialize();
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post($form.attr('action'), postData ,function(result) {
                console.log(result);
                //根据ajax返回的结果处理前端的业务逻辑
                $("#regLoginModal .modal-title").text("用户注册提示");
                if(result.isSuccess){
                	//注册成功
                	//显示蒙层（模态框），并倒计时5秒跳转得到登录页面
                	//模态框的语法： $('#myModal').modal(options) 
                	//options选项  show boolean	true	模态框初始化之后就立即显示出来。
                	
                	$("#regLoginModal .modal-body").html("<a href='../../login.php'><span class='glyphicon glyphicon-ok'></span>"+result.msg+"<span id='count'>5</span> 秒后自动跳转,点击立即跳转</a>");
                	$("#regLoginModal").modal("show");
                	//倒计时效果的实现
                	//setInterval(callback,间隔时间) 方法可按照指定的周期（以毫秒计）
                	var num=5;
                	var timeid=setInterval(function () {
                		num--;
                		$("#count").text(num);
                		if(num==0){
                			clearInterval(timeid);
                			location.href="login.php";
                		}
                	},1000);
                }
                else{
                	//注册失败
                	$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>"+result.msg);
                	$("#regLoginModal").modal("show");
                	console.log(result.msg); //前端人员解决问题查看原因
                }
            }, 'json');
        });
    //对那个表单做验证,登录页面验证
    $('#loginForm')
        //调用验证方法，验证方法中是一个配置对象
        .bootstrapValidator({
            //表单验证的状态提示图标
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //通过
                invalid: 'glyphicon glyphicon-remove', //失败
                validating: 'glyphicon glyphicon-refresh' //正在验证中
            },
            //对那些表单元素做验证
            fields: {
                //用户名验证
                username: {
                    message: '用户名验证失败', //表单出错的局部提示信息
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        //长度范围
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6~18位之间'
                        }
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        }
                    }
                }
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function(e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator');
            // 使用ajax发送提交表单的数据请求
            var postData=$form.serialize();
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post($form.attr('action'), postData ,function(result) {
//              console.log(result);
                //根据ajax返回的结果处理前端的业务逻辑
                if(result.isSuccess){
                    location.href="personnel.php";
                }else{
//              	console.log(11);
                	$("#password1").val("");
                	$("#psdmsg").html("用户名或密码输入错误");
                }
            },'json');
        });
        $('#loginForm input').on('focus',function(){
        	$("#psdmsg").html("");
        })
});