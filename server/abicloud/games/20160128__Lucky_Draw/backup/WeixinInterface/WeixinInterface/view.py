#from django.http import HttpResponse
#from django.views.decorators.csrf import csrf_exempt
#from django.template import RequestContext, Template
#from django.utils.encoding import smart_str, smart_unicode
#import hashlib
#from xml.etree import ElementTree as etree
#
#@csrf_exempt
#def weixin(request):
#    #import ipdb;ipdb.set_trace()
#    if request.method=='GET':
#        response=HttpResponse(checkSignature(request))
#        return response
#    else:
#       # this is post form weixin server
#       chkstatus = checkSignature(request)
#       xmlstr = smart_str(request.body)
#       xml = etree.fromstring(xmlstr)
#
#       ToUserName = xml.find('ToUserName').text
#       FromUserName = xml.find('FromUserName').text
#       CreateTime = xml.find('CreateTime').text
#       MsgType = xml.find('MsgType').text
#       Content = xml.find('Content').text
#       MsgId = xml.find('MsgId').text
#       reply_xml = """<xml>
#       <ToUserName><![CDATA[%s]]></ToUserName>
#       <FromUserName><![CDATA[%s]]></FromUserName>
#       <CreateTime>%s</CreateTime>
#       <MsgType><![CDATA[text]]></MsgType>
#       <Content><![CDATA[%s]]></Content>
#       </xml>"""%(FromUserName,ToUserName,CreateTime,Content + "  Hello world, this is test message")
#       return HttpResponse(reply_xml)
#
#def checkSignature(request):
#    signature=request.GET.get('signature',None)
#    timestamp=request.GET.get('timestamp',None)
#    nonce=request.GET.get('nonce',None)
#    echostr=request.GET.get('echostr',None)
#    #...token...setting...........
#    token="yourtoken"
#
#    tmplist=[token,timestamp,nonce]
#    tmplist.sort()
#    tmpstr="%s%s%s"%tuple(tmplist)
#    tmpstr=hashlib.sha1(tmpstr).hexdigest()
#    if tmpstr==signature:
#        return echostr
#    else:
#        return None
