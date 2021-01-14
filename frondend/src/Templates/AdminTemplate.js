import { NavLink, Route } from "react-router-dom";
import { Layout, Menu, Breadcrumb } from "antd";
import {
  DesktopOutlined,
  PieChartOutlined,
  FileOutlined,
  TeamOutlined,
  UserOutlined,
} from "@ant-design/icons";
import { useState } from "react";
import "antd/dist/antd.css";

const { Header, Content, Footer, Sider } = Layout;
const { SubMenu } = Menu;

export const AdminTemplate = (props) => {
  const { Component, ...restParams } = props;
  const [collapsed, setCollapsed] = useState(false);

  const onCollapse = (collapsed) => {
    console.log(collapsed);
    setCollapsed(collapsed);
  };

  return (
    <Route
      {...restParams}
      render={(propsRoute) => {
        return (
          <>
            <Layout style={{ minHeight: "100vh" }}>
              <Sider collapsible collapsed={collapsed} onCollapse={onCollapse}>
                <div className="logo" />
                <Menu theme="dark" defaultSelectedKeys={["1"]} mode="inline">
                  <SubMenu key="sub1" icon={<UserOutlined />} title="User">
                    <Menu.Item key="1" icon={<PieChartOutlined />}>
                      <NavLink to="/admin/quanlynguoidung">
                        Quản lý người dùng
                      </NavLink>
                    </Menu.Item>
                    <Menu.Item key="4">Bill</Menu.Item>
                    <Menu.Item key="5">Alex</Menu.Item>
                  </SubMenu>
                  <SubMenu key="sub2" icon={<TeamOutlined />} title="Team">
                    <Menu.Item key="2" icon={<DesktopOutlined />}>
                      <NavLink to="/admin/quanlysanpham">
                        Quản lý sản phẩm
                      </NavLink>
                    </Menu.Item>
                    <Menu.Item key="8">Team 2</Menu.Item>
                  </SubMenu>
                  <Menu.Item key="9" icon={<FileOutlined />}>
                    Files
                  </Menu.Item>
                </Menu>
              </Sider>
              <Layout className="site-layout">
                {/* <Header
                  className="site-layout-background"
                  style={{ padding: 0 }}
                /> */}
                <Content style={{ margin: "0 16px" }}>
                  {/* <Breadcrumb style={{ margin: "16px 0" }}>
                    <Breadcrumb.Item>User</Breadcrumb.Item>
                    <Breadcrumb.Item>Bill</Breadcrumb.Item>
                  </Breadcrumb> */}
                  <div
                    className="site-layout-background"
                    style={{ padding: 24, minHeight: 360 }}
                  >
                    <Component {...propsRoute} />
                  </div>
                </Content>
                <Footer style={{ textAlign: "center" }}>
                  Ant Design ©2018 Created by Ant UED
                </Footer>
              </Layout>
            </Layout>
          </>
        );
      }}
    />
  );
};
