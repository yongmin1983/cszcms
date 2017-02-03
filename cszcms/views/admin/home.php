<?php $config = $this->Csz_admin_model->load_config(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h2 class="box-title"><b><?php echo $this->lang->line('dash_welcome') ?></b></h2>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <p><?php echo  $this->lang->line('dash_message') ?></p>
                    </div>
                    <div class="box-footer">
                        <p><b><a href="https://www.cszcms.com" target="_blank"><?php echo $this->lang->line('dash_cszcms_link') ?></a></b></p>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h2 class="box-title"><i><span class="glyphicon glyphicon-dashboard"></span></i> <?php echo $this->lang->line('nav_dash') ?></h2>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row col-sm-12">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h1><i><span class="glyphicon glyphicon-user"></span></i></h1>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $total_member ?></div>
                                                <div><?php echo $this->lang->line('dashboard_totalmember') ?>!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo BASE_URL.'/admin/users' ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail') ?></span>
                                            <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                        <div class="row col-sm-12">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h1><i><span class="glyphicon glyphicon-link"></span></i></h1>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php if($config->link_statistic_active){ echo $total_linkstats; }else{ echo '-'; } ?></div>
                                                <div><?php echo $this->lang->line('dashboard_totallink') ?>!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php if($config->link_statistic_active){ echo BASE_URL.'/admin/linkstats'; }else{ echo '#'; } ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left"><?php if($config->link_statistic_active){ echo $this->lang->line('dashboard_viewdetail'); }else{ echo '<span class="error"><b>'.$this->lang->line('pluginmgr_disable').'!</b></span>'; } ?></span>
                                            <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                        <div class="row col-sm-12">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <h1><i><span class="glyphicon glyphicon-envelope"></span></i></h1>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $total_emaillogs ?></div>
                                                <div><?php echo $this->lang->line('dashboard_totalemail') ?>!</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo BASE_URL.'/admin/forms' ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left"><?php echo $this->lang->line('dashboard_viewdetail') ?></span>
                                            <span class="pull-right"><i><span class="glyphicon glyphicon-expand"></span></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"><i><span class="fa fa-rss"></span></i> <?php echo $this->lang->line('dashboard_rssnews') ?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="word-wrap:break-word;">
                        <?php if(!empty($rss)){
                            foreach ($rss as $item) {
                               echo '<a href="'.$item['link'].'" target="_blank"><b>'.$item['title'].'</b></a><br>';
                               echo '<em>'.$item['pubDate'].'</em><br><br>'; 
                               echo $item['description'];
                               echo '<hr>';
                            }   
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
<!-- Page Heading -->
<!-- /.row -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><i><span class="glyphicon glyphicon-envelope"></span></i> <?php echo $this->lang->line('dashboard_emailrecent') ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12" style="word-wrap:break-word;">
                <div class="list-group">
                    <?php if ($visitor_admin != 0 || $_SESSION['admin_type'] != 'admin'){ ?>
                        <div class="list-group-item">
                            <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                            <b><?php echo  $this->lang->line('user_not_allow_txt') ?></b>
                        </div> 
                    <?php }else{
                        if ($email_logs === FALSE) { ?>
                            <div class="list-group-item">
                                <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                                <b><?php echo  $this->lang->line('data_notfound') ?></b>
                            </div>                          
                        <?php } else { ?>
                            <?php foreach ($email_logs as $el) { 
                                $i = 0;
                                if($el['email_result'] != 'success'){
                                    $error_rs = '<span class="error">Error - '.strip_tags($el['email_result']).'</span>';
                                }else{
                                    $error_rs = '<span class="success">Success</span>';
                                }
                                $i++;
                            ?>
                            <span class="list-group-item">
                                <span class="badge"><?php echo $el['timestamp_create'] ?></span>
                                <b><?php echo $this->lang->line('forms_subject') ?>:</b> <?php echo $el['subject'] ?><br>
                                <span style="font-size:12px;"><b><?php echo $this->lang->line('dashboard_fromemail') ?>: <?php echo $el['from_email'] ?> | <?php echo $this->lang->line('dashboard_toemail') ?>: <?php echo $el['to_email'] ?></b></span> [<span style="font-style: italic; font-size:12px;"><?php echo $el['ip_address'] ?></span>] [<span style="font-style: italic; font-size:12px;"><?php echo $el['user_agent'] ?></span>] [<b><?php echo $error_rs?></b>]<br>
                                <pre><?php echo strip_tags($el['message']) ?></pre>
                                <div class="control-group text-right">
                                    <a class="btn btn-danger btn-sm" role="button" onclick="return confirm('<?php echo $this->lang->line('delete_message')?>')" href="<?php echo BASE_URL.'/admin/admin/deleteEmailLogs/'.$el['email_logs_id']?>">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                </div>
                            </span>
                            <?php } ?>        
                        <?php } 
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->
<?php if($config->link_statistic_active){ ?>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i><span class="glyphicon glyphicon-link"></span></i> <?php echo $this->lang->line('dashboard_linkrecent') ?></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12" style="word-wrap:break-word;">
                <div class="list-group">
                    <?php if ($link_stats === FALSE) { ?>
                        <div class="list-group-item">
                            <span class="badge"><?php echo date('Y-m-d H:i:s')?></span>
                            <b><?php echo  $this->lang->line('data_notfound') ?></b>
                        </div>                          
                    <?php } else { ?>
                        <?php foreach ($link_stats as $ls) { ?>
                        <a class="list-group-item" href="<?php echo BASE_URL.'/admin/linkstats/view/'.$ls['link_statistic_id'] ?>">
                            <span class="badge"><?php echo $ls['timestamp_create'] ?></span>
                            <b>[<?php echo $ls['ip_address'] ?>]</b> - <?php echo $ls['link'] ?>
                        </a>
                        <?php } ?>
                    <?php } ?>
                </div>               
                <div class="text-right">
                    <a href="<?php echo BASE_URL.'/admin/linkstats' ?>" style="text-decoration: none;"><?php echo $this->lang->line('dashboard_viewdetail') ?> <i><span class="glyphicon glyphicon-expand"></span></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->
<?php } ?>