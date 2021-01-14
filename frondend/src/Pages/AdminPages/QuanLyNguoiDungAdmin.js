import React from "react";
import { Table } from "antd";

export default function QuanLyNguoiDungAdmin() {
  const columns = [
    {
      title: "Tên",
      dataIndex: "name",
      key: "name",
    },
    {
      title: "Tài Khoản",
      dataIndex: "taiKhoan",
      key: "taiKhoan",
    },
    {
      title: "Mật Khẩu",
      dataIndex: "password",
      key: "password",
    },
    {
      title: "Age",
      dataIndex: "age",
      key: "age",
    },
    {
      title: "Address",
      dataIndex: "address",
      key: "address",
    },
    {
      title: "Email",
      dataIndex: "email",
      key: "email",
    },
    {
      title: "SĐT",
      dataIndex: "sdt",
      key: "sdt",
    },
    {
      title: "",
      dataIndex: "handle",
      key: "address 5",
      width: 200,
      render: (record, action) => {
        return (
          <>
            <button
              className="btn btn-outline-primary mr-3"
              // onClick={() => handleUser(action.taiKhoan)}
            >
              <i class="fa fa-edit"></i> Sửa
            </button>
            <button
              className="btn btn-outline-danger"
              // onClick={() => handleDelete(action.taiKhoan)}
            >
              <i class="fa fa-trash-alt"></i> Xóa
            </button>
          </>
        );
      },
    },
  ];
  const data = [
    {
      key: "1",
      name: "John Brown",
      taiKhoan: "hihi",
      password: "123456789",
      age: 32,
      address: "New York No. 1 Lake Park",
      email: "hihi@gmail.com",
      sdt: "123456789",
    },
    {
      key: "2",
      name: "Jim Green",
      taiKhoan: "hihi",
      password: "123456789",
      age: 42,
      address: "London No. 1 Lake Park",
      email: "hihi@gmail.com",
      sdt: "123456789",
    },
    {
      key: "3",
      name: "Joe Black",
      taiKhoan: "hihi",
      password: "123456789",
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
