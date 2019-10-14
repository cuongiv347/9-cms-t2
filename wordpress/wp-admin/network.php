"REG_SZ" value="{6B1DE8B3-DFB1-4C0E-9D9A-89CA730DE93F}" owner="true" />
      <securityDescriptor name="WRP_REGKEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\CLSID\{6B7F33AC-D91D-4563-BF36-0ACCB24E66FB}\LocalServer32" owner="false">
      <registryValue name="" valueType="REG_SZ" value="$(runtime.system32)\mstsc.exe -SingleUse" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\CLSID\{1B462D7B-72D8-4544-ACC1-D84E5B9A8A14}\TypeLib" owner="false">
      <registryValue name="" valueType="REG_SZ" value="{9C757116-4367-4DA9-AC0E-6C6577AD5560}" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Interface\{A0B2DD9A-7F53-4E65-8547-851952EC8C96}" owner="false">
      <registryValue name="" valueType="REG_SZ" value="IMsRdpSessionManager" owner="true" />
      <securityDescriptor name="WRP_REGKEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Interface\{A0B2DD9A-7F53-4E65-8547-851952EC8C96}\ProxyStubClsid32" owner="false">
      <registryValue name="" valueType="REG_SZ" value="{00020424-0000-0000-C000-000000000046}" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\Interface\{A0B2DD9A-7F53-4E65-8547-851952EC8C96}\TypeLib" owner="false">
      <registryValue name="" valueType="REG_SZ" value="{9C757116-4367-4DA9-AC0E-6C6577AD5560}" owner="true" />
      <registryValue name="Version" valueType="REG_SZ" value="1.0" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{9C757116-4367-4DA9-AC0E-6C6577AD5560}" owner="false">
      <securityDescriptor name="WRP_REGKEY_DEFAULT_SDDL" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{9C757116-4367-4DA9-AC0E-6C6577AD5560}\1.0" owner="false">
      <registryValue name="" valueType="REG_SZ" value="MsRdpSessionManager 1.0 Type Library" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{9C757116-4367-4DA9-AC0E-6C6577AD5560}\1.0\0" owner="false" />
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{9C757116-4367-4DA9-AC0E-6C6577AD5560}\1.0\0\win32" owner="false">
      <registryValue name="" valueType="REG_SZ" value="$(runtime.system32)\mstsc.exe" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{9C757116-4367-4DA9-AC0E-6C6577AD5560}\1.0\FLAGS" owner="false">
      <registryValue name="" valueType="REG_SZ" value="0" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_CLASSES_ROOT\TypeLib\{9C757116-4367-4DA9-AC0E-6C6577AD5560}\1.0\HELPDIR" owner="false">
      <registryValue name="" valueType="REG_SZ" value="$(runtime.system32)" owner="true" />
    </registryKey>
  </registryKeys>
  <trustInfo>
    <security>
      <accessControl>
        <securityDescriptorDefinitions>
          <securityDescriptorDefinition name="REGKEY_NETWORKSERVICE_ONLY" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;CI;GA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;CI;GA;;;SY)(A;CI;GA;;;BA)(A;CI;GR;;;NS)" operationHint="replace" />
          <securityDescriptorDefinition name="WRP_FILE_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;;FA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;;GRGX;;;BA)(A;;GRGX;;;SY)(A;;GRGX;;;BU)S:(AU;FASA;0x000D0116;;;WD)" operationHint="replace" description="Default SDDL for Windows Resource Protected file" />
          <securityDescriptorDefinition name="WRP_REGKEY_ALL_AUTH_USERS" sddl="D:(D;;KAKRKWKX;;;BG)(D;;KAKRKWKX;;;AN)(A;;KRKWKX;;;AU)(A;;KAKRKWKX;;;BA)" operationHint="replace" />
          <securityDescriptorDefinition name="WRP_REGKEY_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;CI;GA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;CI;GR;;;SY)(A;CI;GR;;;BA)(A;CI;GR;;;BU)" operationHint="replace" />
        </securityDescriptorDefinitions>
      </accessControl>
    </security>
  </trustInfo>
  <localization>
    <resources culture="en-US">
      <stringTable>
        <string id="description" value="This component implements the Terminal Services Client." />
        <string id="description1" value="Default SDDL for Windows Resource Protected file" />
        <string id="description7" value="Default SDDL for Windows Resource Protected registry key" />
        <string id="description8" value="SDDL to allow all authorized users to read/write values to this registry key" />
        <string id="description9" value="Only Administrators and Network Service have access to registry key" />
        <string id="displayName" value="Terminal Services Client" />
        <string id="displayName0" value="WRP_FILE_DEFAULT_SDDL" />
        <string id="displayName6" value="WRP_REGKEY_DEFAULT_SDDL" />
        <string id="displayName7" value="WRP_REGKEY_ALL_AUTH_USERS" />
        <string id="displayName8" value="REGKEY_NETWORKSERVICE_ONLY" />
      </stringTable>
    </resources>
  </localization>
  <migration settingsVersion="0">
    <supportedComponents>
      <supportedComponent>
        <assemblyIdentity name="_" version="1.0.0.0" />
   