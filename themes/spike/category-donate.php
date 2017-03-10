<?php get_header(); ?>

<div id="donate-page-index">
    <div class="picture-max"
         style="background-repeat: no-repeat; background-size: cover; background-image: url(&quot;/wp-content/themes/spike/images/hero_donate.png&quot;); background-position: center center;">
        <div class="donate-img-text"><h2>“施比受更为有福。”</h2>
            <h3>—— St Francis of Assisi</h3></div>
    </div>
    <div class="container">
        <div id="donate-way">
            <div class="donate-way-title"><h2 class="middle-title">捐款方式</h2></div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12  donate-item">
                            <div id="donatethings" class=" donate "><h3>物品捐赠</h3>
                                <div class="row">
                                    <ul class="col-xs-offset-3 col-xs-9">
                                        <li><a class="donate-goods-item" href="#donate-guide-hash"> 捐赠指南</a></li>
                                        <li><a class="donate-goods-item" href="#donate-guide-collect-hash">捐赠物品代收点</a>
                                        </li>
                                        <li><a class="donate-goods-item" href="#donate-guide-apply-hash">上门收取捐赠物品申请表</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12  donate-item">
                            <div id="donatemoney" class="donate"><h3 class="text-center">捐款</h3>
                                <div class="row donate-money-margin">
                                    <div class="col-xs-offset-1 col-xs-5"><img src="<?php bloginfo('template_url') ?>/images/wechat01.png"
                                                                               class="img-center">
                                        <div class="span">Wechat</div>
                                    </div>
                                    <div class="col-xs-5"><a
                                                href="http://www.ccafc.org.cn/templates/Donation/txxx.aspx?nodeid=5&amp;projectid=3299&amp;strname=&amp;jiner=&amp;notes_email="
                                                target="_blank">
                                            <div class="image-border"><img
                                                        src="data:image/png;base64,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"
                                                        class="img-center"></div>
                                        </a>
                                        <div class="span">CCAFC</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-offset-1 col-xs-5"><a
                                                href="http://love.alipay.com/donate/itemDetail.htm?name=2015081315541167376"
                                                target="_blank"><img
                                                    src="data:image/png;base64,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"
                                                    class="img-center"></a>
                                        <div class="span">Alipay</div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="image-border"><img
                                                    src="data:image/png;base64,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"
                                                    class="img-center"></div>
                                        <div class="span">Paypal</div>
                                    </div></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12  donate-item">
                            <div id="donateProjects" class="donate"><h3>募捐项目</h3>
                                <p class="middle-describe donate-projects-tect">直接通过乐捐捐款</p>
                                <div class="wechat-image"><img src="<?php bloginfo('template_url') ?>/images/wechat01.png"
                                                               class="donateProjects-wechat">
                                    <div class="span">腾讯</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row donate-way-text">We offer assistance by either directly passing on the items you
                        have donated or by selling them in ourretail store to raise funds. Store proceeds pay for
                        medical costs for orphans and others less fortunate,sheltered housing for the elderly, warm
                        blankets, food and other basic needs items for distribution.
                    </div>
                </div>
            </div>
        </div>
        <div class="item-donation" id="item-donation">
            <div class="item-donation-title"><h2 class="middle-title">物品捐赠</h2></div>
            <div class="row">
                <div><img class="item-donation-img" src="<?php bloginfo('template_url') ?>/images/Item donation.png"></div>
            </div>
            <div class="row" id="donate-guide-hash">
                <div class="donate-guide col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12 no-padding"><h3
                            class="donate-items-title"><a class="donate-guide-title">捐赠指南</a></h3>

                    <div class="col-md-offset-2 col-xs-offset-1 col-md-8 col-xs-10 donate-guide-content"><p>Open,
                            prescription and out of date medicines.</p>
                        <p>Used underwear, including socks.</p>
                        <p>Anything previously used by an animal – such as a dog’s bed</p>
                        <p>Copies of magazines over 6 months old.</p>
                        <p>Computers, monitors and printers over 4 years old.</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-xs-12 donate-collect-items" id="donate-guide-collect-hash">
                    <div><h3 class="donate-items-title">捐赠物品代收点</h3>
                        <div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">Roundabout Store</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">+86 137 1805 3814 ( for directions in Chinese )</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Sunday 24hours</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">CCAFC office</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">86 10 5166 0112</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Friday 9am - 5pm</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">Zarah Cafe</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info"> 86 10 8403 9807</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Sunday 24hours</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">Tuan Jie Hu Community Recycle Station</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info"> 86 10 139 1075 9629</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Sunday 24hours</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">OASIS Hospital</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">86 10 59850405</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Friday 9am - 5pm</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">Riviera Clubhouse</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">86 10 8450 6888</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Sunday 6am - 10pm</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">Bo Ya School</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">86 10 158 1128 6996</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Sunday 9am - 5pm</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">BIBA</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">SCOUT Real Estate</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">86 10 8596 8873</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Friday 9am - 6pm</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                <div class="col-sm-offset-1 col-xs-offset-0 col-sm-10 col-xs-12 contact-content">
                                    <div class="item-title">Shine Hills</div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAUVJREFUKBWdka1LBFEUxc99M64KBotgMohBMPkXLGLabSIOgrpJzIrBskXsokUwWBwRXMMG0V0QdoLRYHAt5gVBxOQH6uw73hkYmJ0p4ivvcji/8+69D/jHkSxTrwfDb+HHISGTIDYqXrmV9fRAp7WrYhc4oKAhpCUwLYJXMbK5PF/uJHAMBUHgdl4+t0nMGOGtpawBHFDgBpCmvrgkEL+AsV3Pm/oWv9acAKyv6feaME5yNkmMb5Ev1feiWl8uGSOrLmH3NfFClXWCIz1A7GS/mrcgcueYwpwwHIzbOzm/3NEBqjkgJWh77yteeSiSTEr/c+lmnZp4res+M8b2kVLUGReznhykC3moLJSOIuNxrfGj4+egXHtCsUmyMQiTOn3nIOqvpgz61/kTt+c68Luh82jBUQHbiU2s0zZgVdf1DPIp0X8Bsz5xFRkJD2EAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Adjacent to Yosemite Villa Compound, Yuyang Road West, Off An Hua Road, SHUNYI, 101302</span>
                                    </div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAXlJREFUKBWVUb9Lw2AQvftSqL+og4vO+gcILi6KBUFbEEWbydoOgouD4KTg4uLgoruDUNsl6SK1SdUhsyBOIiK41a1IQWmLmu+8q00pQhEf5Md7717uvgtCBxzHCVdramxkKPwcjUYbgXVml6YQ9ETSjB+LpuRmWdeDWat4WnmHty/t37+81sdFF0gASDua6Chnu8uiKSLCBnyeE2IcAbYVqk2A3nJngIAGhHOQPQ5l7dICIkwrxBQArRPBKECdu3vD0iEISDH7H3IPcWCSC5980jOA6iBlxmwxBJn85Sxqf4eDSzyFrwzjUHSFZFhMNpSBFz0UuhIxQCoxdwMId8w1IKZXV+a9wGs/Pc8LtQm/ZGx3L2MV/WzeTXbqze2JIFsqV2oPhcJtn3AJ8Jn2lVLpZCKWFS0Aj9peq8uz94NSW0AQ6RaQemz9h59AU4EaEoTlDGtmPCfSb/B4erfZoeX8FZAyRRHD5K+e8JaqfD0CGIvdOvzu+C/+DSzAoZp/PzbmAAAAAElFTkSuQmCC"></span><span
                                                class="contact-info">86 10 6144 5671</span></div>
                                    <div><span class="content-icon"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABGdBTUEAALGPC/xhBQAAAedJREFUKBVdUj9ok0EUf+/u+2JT0zgU2sXFIqUIOpQMUiqlk2kcIrRfKDFVHFzUzUUE1zrpZnHQxaRSvjTQDH6kIAoqTqmD/wYHOygIwU1r2jR3P98JJ8Ub7v3ee7/fvffujum/VY1bx0nRJCwGA8L2+NjIm1wut3+Qxt6pNZKj1tBDIpyVYA/EYhAyc4dB1yqlwrrnKgeq9dYZGPogrIzWwcxwhrMB8YxW4TgTPwJhrRonK17Ecfwis0vd9xL4xFrdXprPv/VJb2v15IYF3ZEKZVdR9Xj3liT1kUPZRS94vLl5uBY/LXtRJSrclWbvgel+u90OlYU9z4z1YnH6pycFvVQazBPedzYI+AGAkc9fOlNSkY/JLDqOP6Y8qd/tDQmeWm20Zn1cZs7K3ez1ha+Y0CVwJ4pO9L1IabPPwFcYO5xOdwMXDyy+E0gp4Qcg2iLGKbla60WV+cI3wZe97+weqwmCCUF6i1frraKFabDmaQX+XV6Ye3eQ7LA8+DmQvSlw52KpkFcXonxTel2DwXNDGPOCJ81now43m6+HRHBV5j4ZpvQVFxNMVEuSLHZohYBFOaAuvb+UzGmZ9YcIFoRkiPWlpSj/6p/IAbdcqwbmupw1Ke6gfKNtxWojhYHlUmn211+SbH8AkCK8PHAglHIAAAAASUVORK5CYII="></span><span
                                                class="contact-info">Monday - Sunday 10am - 8:30pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="donate-guide-apply row">
                <div class="container donate-guide-apply col-xs-12 col-md-offset-1 col-md-10"
                     id="donate-guide-apply-hash"><h3 class="donate-items-title">申请上门收取捐赠物品</h3>
                    <div class="apply-extra-info"><p>Thank you for requesting a pick up of your donations, we will try
                            our best to help.</p>
                        <p>Please start by filling in the pick up request form. One of our staff will then contact you
                            to make arrangements for the pick up. Please allow 2 business days for us to respond, as we
                            have a small staff.</p>
                        <p>**Due to the nature of Beijing traffic, we cannot guarantee an exact pick-up time. We will
                            strive to arrive within a 1-hour window and call you if our driver is running late. Thank
                            you for giving us as much notice as possible. The more notice you give us, the more likely
                            we will be to have vans and trucks available at your preferred time.**</p>
                        <p>Large items of furniture – monetary donation not necessary</p></div>
                    <div class="col-sm-offset-4 col-xs-offset-0 col-sm-4 col-xs-12 apply-collect-items">
                        <button class="apply-button js-open-box">上门收取捐赠物品申请表</button></div>
                </div>
            </div>
        </div>
        <div class="donating-projects">
            <div class="donating-middle-text"><h2 class="middle-title">正在捐款的项目</h2></div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="col-md-3 col-sm-4 col-xs-6 donating-project"><img
                                src="http://127.0.0.1/wp-content/uploads/2016/11/b73c2e887eefdca6327835131a4b8e93.jpg">
                        <div class="child-profile"><p>这里是简介哦-。-！已经测试过长度的问题，不会越界的，放心哦^0^</p></div>
                        <div class="child-profile-text"><h4>小黄
                                ，10
                                岁</h4>
                            <p>小黄</p>
                            <p>需要&nbsp;￥10
                                万</p>
                            <p class="pink"><a href="/tw-ra/childstories?id=139">阅读更多 &gt;</a></p></div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 donating-project"><img
                                src="http://127.0.0.1/wp-content/uploads/2016/11/孔雀-绣花.jpg">
                        <div class="child-profile"><p>这里是简介哦-。-！已经测试过长度的问题，不会越界的，放心哦^0^</p></div>
                        <div class="child-profile-text"><h4>小红
                                ，12
                                岁</h4>
                            <p>小红</p>
                            <p>需要&nbsp;￥12
                                万</p>
                            <p class="pink"><a href="/tw-ra/childstories?id=137">阅读更多 &gt;</a></p></div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 donating-project"><img
                                src="http://127.0.0.1/wp-content/uploads/2016/12/Home-Page1.jpg">
                        <div class="child-profile"><p>这里是简介哦-。-！已经测试过长度的问题，不会越界的，放心哦^0^</p></div>
                        <div class="child-profile-text"><h4>小明
                                ，13
                                岁</h4>
                            <p>小明</p>
                            <p>需要&nbsp;￥13
                                万</p>
                            <p class="pink"><a href="/tw-ra/childstories?id=135">阅读更多 &gt;</a></p></div>
                    </div>
                </div>
            </div>
            <div class="row" id="pagination-project">
                <div class="col-md-offset-1 col-md-3 col-sm-5 col-xs-6 ">
                    <div class="pagination-project">
                        <ul class="pagination">
                            <li class="disabled"><a><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active"><a name="1">
                                    1</a></li>
                            <li class=""><a name="2">
                                    2</a></li>
                            <li class=""><a><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-5">
                    <div class="text-right"><a href="/tw-ra/donate/donatecurrent">
                            <div class="donateProject-more">更多&gt;</div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>