# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/base/shoppingcart_order.proto

import sys
_b=sys.version_info[0]<3 and (lambda x:x) or (lambda x:x.encode('latin1'))
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
from google.protobuf import descriptor_pb2
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()


import protos.base.item_detail_infomation_pb2


DESCRIPTOR = _descriptor.FileDescriptor(
  name='protos/base/shoppingcart_order.proto',
  package='',
  serialized_pb=_b('\n$protos/base/shoppingcart_order.proto\x1a(protos/base/item_detail_infomation.proto\"\xa2\x01\n\x17ItemsInOrderInformation\x12\x0f\n\x07item_id\x18\x01 \x02(\t\x12\x19\n\x11item_chinese_name\x18\x02 \x02(\t\x12\x11\n\tbuy_count\x18\x03 \x02(\r\x12\x30\n\x10item_detail_info\x18\x05 \x02(\x0b\x32\x16.ItemDetailInformation\x12\x16\n\x0eitem_small_pic\x18\x06 \x01(\t\"a\n\x16ItemsInOrderCollection\x12\x32\n\x10items_collection\x18\x01 \x03(\x0b\x32\x18.ItemsInOrderInformation\x12\x13\n\x0btotal_price\x18\x02 \x02(\x02\";\n\x10OrdersCollection\x12\'\n\x06orders\x18\x01 \x03(\x0b\x32\x17.ItemsInOrderCollection')
  ,
  dependencies=[protos.base.item_detail_infomation_pb2.DESCRIPTOR,])
_sym_db.RegisterFileDescriptor(DESCRIPTOR)




_ITEMSINORDERINFORMATION = _descriptor.Descriptor(
  name='ItemsInOrderInformation',
  full_name='ItemsInOrderInformation',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='item_id', full_name='ItemsInOrderInformation.item_id', index=0,
      number=1, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='item_chinese_name', full_name='ItemsInOrderInformation.item_chinese_name', index=1,
      number=2, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='buy_count', full_name='ItemsInOrderInformation.buy_count', index=2,
      number=3, type=13, cpp_type=3, label=2,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='item_detail_info', full_name='ItemsInOrderInformation.item_detail_info', index=3,
      number=5, type=11, cpp_type=10, label=2,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='item_small_pic', full_name='ItemsInOrderInformation.item_small_pic', index=4,
      number=6, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  options=None,
  is_extendable=False,
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=83,
  serialized_end=245,
)


_ITEMSINORDERCOLLECTION = _descriptor.Descriptor(
  name='ItemsInOrderCollection',
  full_name='ItemsInOrderCollection',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='items_collection', full_name='ItemsInOrderCollection.items_collection', index=0,
      number=1, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='total_price', full_name='ItemsInOrderCollection.total_price', index=1,
      number=2, type=2, cpp_type=6, label=2,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  options=None,
  is_extendable=False,
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=247,
  serialized_end=344,
)


_ORDERSCOLLECTION = _descriptor.Descriptor(
  name='OrdersCollection',
  full_name='OrdersCollection',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='orders', full_name='OrdersCollection.orders', index=0,
      number=1, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  options=None,
  is_extendable=False,
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=346,
  serialized_end=405,
)

_ITEMSINORDERINFORMATION.fields_by_name['item_detail_info'].message_type = protos.base.item_detail_infomation_pb2._ITEMDETAILINFORMATION
_ITEMSINORDERCOLLECTION.fields_by_name['items_collection'].message_type = _ITEMSINORDERINFORMATION
_ORDERSCOLLECTION.fields_by_name['orders'].message_type = _ITEMSINORDERCOLLECTION
DESCRIPTOR.message_types_by_name['ItemsInOrderInformation'] = _ITEMSINORDERINFORMATION
DESCRIPTOR.message_types_by_name['ItemsInOrderCollection'] = _ITEMSINORDERCOLLECTION
DESCRIPTOR.message_types_by_name['OrdersCollection'] = _ORDERSCOLLECTION

ItemsInOrderInformation = _reflection.GeneratedProtocolMessageType('ItemsInOrderInformation', (_message.Message,), dict(
  DESCRIPTOR = _ITEMSINORDERINFORMATION,
  __module__ = 'protos.base.shoppingcart_order_pb2'
  # @@protoc_insertion_point(class_scope:ItemsInOrderInformation)
  ))
_sym_db.RegisterMessage(ItemsInOrderInformation)

ItemsInOrderCollection = _reflection.GeneratedProtocolMessageType('ItemsInOrderCollection', (_message.Message,), dict(
  DESCRIPTOR = _ITEMSINORDERCOLLECTION,
  __module__ = 'protos.base.shoppingcart_order_pb2'
  # @@protoc_insertion_point(class_scope:ItemsInOrderCollection)
  ))
_sym_db.RegisterMessage(ItemsInOrderCollection)

OrdersCollection = _reflection.GeneratedProtocolMessageType('OrdersCollection', (_message.Message,), dict(
  DESCRIPTOR = _ORDERSCOLLECTION,
  __module__ = 'protos.base.shoppingcart_order_pb2'
  # @@protoc_insertion_point(class_scope:OrdersCollection)
  ))
_sym_db.RegisterMessage(OrdersCollection)


# @@protoc_insertion_point(module_scope)
