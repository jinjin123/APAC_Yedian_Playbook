# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/base/item_detail_infomation.proto

import sys
_b=sys.version_info[0]<3 and (lambda x:x) or (lambda x:x.encode('latin1'))
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
from google.protobuf import descriptor_pb2
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()




DESCRIPTOR = _descriptor.FileDescriptor(
  name='protos/base/item_detail_infomation.proto',
  package='',
  serialized_pb=_b('\n(protos/base/item_detail_infomation.proto\"\xaa\x01\n\x15ItemDetailInformation\x12\n\n\x02id\x18\x01 \x02(\t\x12\x0c\n\x04size\x18\x02 \x01(\r\x12\x0c\n\x04unit\x18\x03 \x02(\t\x12\x17\n\x0fitem_each_price\x18\x04 \x02(\x02\x12\x19\n\x11item_is_available\x18\x05 \x02(\x08\x12\x0b\n\x03pic\x18\x07 \x03(\t\x12\x0f\n\x07\x63omment\x18\x08 \x01(\t\x12\x17\n\x0fitem_live_count\x18\t \x01(\r\"K\n ItemsDetailInformationCollection\x12\'\n\x07itemdet\x18\x01 \x03(\x0b\x32\x16.ItemDetailInformation')
)
_sym_db.RegisterFileDescriptor(DESCRIPTOR)




_ITEMDETAILINFORMATION = _descriptor.Descriptor(
  name='ItemDetailInformation',
  full_name='ItemDetailInformation',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='id', full_name='ItemDetailInformation.id', index=0,
      number=1, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='size', full_name='ItemDetailInformation.size', index=1,
      number=2, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='unit', full_name='ItemDetailInformation.unit', index=2,
      number=3, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='item_each_price', full_name='ItemDetailInformation.item_each_price', index=3,
      number=4, type=2, cpp_type=6, label=2,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='item_is_available', full_name='ItemDetailInformation.item_is_available', index=4,
      number=5, type=8, cpp_type=7, label=2,
      has_default_value=False, default_value=False,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='pic', full_name='ItemDetailInformation.pic', index=5,
      number=7, type=9, cpp_type=9, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='comment', full_name='ItemDetailInformation.comment', index=6,
      number=8, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='item_live_count', full_name='ItemDetailInformation.item_live_count', index=7,
      number=9, type=13, cpp_type=3, label=1,
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
  serialized_start=45,
  serialized_end=215,
)


_ITEMSDETAILINFORMATIONCOLLECTION = _descriptor.Descriptor(
  name='ItemsDetailInformationCollection',
  full_name='ItemsDetailInformationCollection',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='itemdet', full_name='ItemsDetailInformationCollection.itemdet', index=0,
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
  serialized_start=217,
  serialized_end=292,
)

_ITEMSDETAILINFORMATIONCOLLECTION.fields_by_name['itemdet'].message_type = _ITEMDETAILINFORMATION
DESCRIPTOR.message_types_by_name['ItemDetailInformation'] = _ITEMDETAILINFORMATION
DESCRIPTOR.message_types_by_name['ItemsDetailInformationCollection'] = _ITEMSDETAILINFORMATIONCOLLECTION

ItemDetailInformation = _reflection.GeneratedProtocolMessageType('ItemDetailInformation', (_message.Message,), dict(
  DESCRIPTOR = _ITEMDETAILINFORMATION,
  __module__ = 'protos.base.item_detail_infomation_pb2'
  # @@protoc_insertion_point(class_scope:ItemDetailInformation)
  ))
_sym_db.RegisterMessage(ItemDetailInformation)

ItemsDetailInformationCollection = _reflection.GeneratedProtocolMessageType('ItemsDetailInformationCollection', (_message.Message,), dict(
  DESCRIPTOR = _ITEMSDETAILINFORMATIONCOLLECTION,
  __module__ = 'protos.base.item_detail_infomation_pb2'
  # @@protoc_insertion_point(class_scope:ItemsDetailInformationCollection)
  ))
_sym_db.RegisterMessage(ItemsDetailInformationCollection)


# @@protoc_insertion_point(module_scope)
