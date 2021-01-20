import { Table } from "antd";
import React from "react";

export default function QuanLySanPhamAdmin() {
  const columns = [
    {
      title: "Tên sản phẩm",
      dataIndex: "name",
      key: "name",
    },
    {
      title: "Hình ảnh",
      dataIndex: "hinhAnh",
      key: "hinhAnh",
    },
    {
      title: "Mô tả",
      dataIndex: "moTa",
      key: "moTa",
    },
    {
      title: "Giá",
      dataIndex: "gia",
      key: "gia",
    },
    {
      title: "Loại sản phẩm",
      dataIndex: "loaiSP",
      key: "loaiSP",
    },
    // {
    //   title: "Email",
    //   dataIndex: "email",
    //   key: "email",
    // },
    // {
    //   title: "SĐT",
    //   dataIndex: "sdt",
    //   key: "sdt",
    // },
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
      name: "SamSung",
      hinhAnh: <img src="https://picsum.photos/50/50" />,
      moTa: "Điện thoại",
      gia: "32000",
      loaiSP: "Điện thoại",
    },
    {
      key: "1",
      name: "Apple",
      hinhAnh: <img src="https://picsum.photos/50/50" />,
      moTa: "Điện thoại",
      gia: "32000",
      loaiSP: "Điện thoại",
    },
    {
      key: "1",
      name: "HP",
      hinhAnh: <img src="https://picsum.photos/50/50" />,
      moTa: "Laptop",
      gia: "32000",
      loaiSP: "Laptop",
    },
    {
      key: "1",
      name: "Sony",
      hinhAnh: <img src="https://picsum.photos/50/50" />,
      moTa: "Điện thoại",
      gia: "32000",
      loaiSP: "Điện thoại",
    },
  ];

  return (
    <>
      <h1>QUẢN LÝ NGƯỜI DÙNG</h1>
      <Table columns={columns} dataSource={data} size="middle" />
    </>
  );
}
