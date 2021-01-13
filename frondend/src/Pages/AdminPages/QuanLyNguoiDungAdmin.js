import React from "react";
import { Table } from "antd";

export default function QuanLyNguoiDungAdmin() {
  const columns = [
    {
      title: "Name",
      dataIndex: "name",
    },
    {
      title: "Password",
      dataIndex: "123",
    },
    {
      title: "Age",
      dataIndex: "age",
    },
    {
      title: "Address",
      dataIndex: "address",
    },
    {
      title: "Email",
      dataIndex: "email",
    },
    {
      title: "SĐT",
      dataIndex: "sdt",
    },
  ];
  const data = [
    {
      key: "1",
      name: "John Brown",
      age: 32,
      address: "New York No. 1 Lake Park",
      email: "hihi@gmail.com",
      sdt: "123456789",
    },
    {
      key: "2",
      name: "Jim Green",
      age: 42,
      address: "London No. 1 Lake Park",
      email: "hihi@gmail.com",
      sdt: "123456789",
    },
    {
      key: "3",
      name: "Joe Black",
      age: 32,
      address: "Sidney No. 1 Lake Park",
      email: "hihi@gmail.com",
      sdt: "123456789",
    },
  ];

  return (
    <>
      <h1>QUẢN LÝ NGƯỜI DÙNG</h1>
      <Table columns={columns} dataSource={data} size="middle" />
    </>
  );
}
